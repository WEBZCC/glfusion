/*
	Slimbox v1.41 - The ultimate lightweight Lightbox clone
	by Christophe Beyls (http://www.digitalia.be) - MIT-style license.
	Inspired by the original Lightbox v2 by Lokesh Dhakar.

	Modified: July 2, 2007
	Mohamed Aly <malaa@caltech.edu>
	Modified to add timed transitions, with duration settable through
	"timerDuration" option.
*/


function processReqChange()
{
  if (req.readyState == 4 && req.status == 200
      && req.responseXML != null)
  {
    var items = [];
    var nl = req.responseXML.getElementsByTagName( 'slide' );
    var slides = '[';

    for( var i = 0; i < nl.length; i++ )
    {
      var nli = nl.item( i );
      var src = nli.getAttribute( 'src' ).toString();
      var caption = nli.getAttribute( 'caption' ).toString();

      items.push([src, caption]);
    }
    Lightbox.open(items,0);
  }
}

function loadXMLDoc( url )
{
  req = false;
  if(window.XMLHttpRequest) {
    try {
      req = new XMLHttpRequest();
    } catch(e) {
      req = false;
    }
  }
  else if(window.ActiveXObject)
  {
    try {
      req = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(e) {
    try {
      req = new ActiveXObject("Microsoft.XMLHTTP");
    } catch(e) {
      req = false;
    }
  }
  }
  if(req) {
    req.onreadystatechange = processReqChange;
    req.open("GET", url, true);
    req.send("");
  }
}

var Lightbox = {

	init: function(options){
		this.options = $extend({
			resizeDuration: 400,
			resizeTransition: false,	// default transition
			initialWidth: 250,
			initialHeight: 250,
			animateCaption: true,
			showCounter: true
			//#malaa: timer interval between switching
			, timerDuration: 5000
			//#malaa
		}, options || {});

		this.anchors = [];
		$each(document.links, function(el){
			if (el.rel && el.rel.test(/^lightbox/i)){
				el.onclick = this.click.pass(el, this);
				this.anchors.push(el);
			}
		}, this);

// 1.11 this.eventKeyDown = this.keyboardListener.bindAsEventlistener(this);
		this.eventPosition = this.position.bind(this);

		this.overlay = new Element('div', {'id': 'lbOverlay'}).injectInside(document.body);

		this.center = new Element('div', {'id': 'lbCenter', 'styles': {'width': this.options.initialWidth, 'height': this.options.initialHeight, 'marginLeft': -(this.options.initialWidth/2), 'display': 'none'}}).injectInside(document.body);
		this.image = new Element('div', {'id': 'lbImage'}).injectInside(this.center);
		this.prevLink = new Element('a', {'id': 'lbPrevLink', 'href': '#', 'styles': {'display': 'none'}}).injectInside(this.image);
		this.nextLink = this.prevLink.clone().setProperty('id', 'lbNextLink').injectInside(this.image);
		this.prevLink.onclick = this.previous.bind(this);
		this.nextLink.onclick = this.next.bind(this);

		this.bottomContainer = new Element('div', {'id': 'lbBottomContainer', 'styles': {'display': 'none'}}).injectInside(document.body);
		this.bottom = new Element('div', {'id': 'lbBottom'}).injectInside(this.bottomContainer);
		new Element('a', {'id': 'lbCloseLink', 'href': '#'}).injectInside(this.bottom).onclick = this.overlay.onclick = this.close.bind(this);
		this.caption = new Element('div', {'id': 'lbCaption'}).injectInside(this.bottom);
		this.number = new Element('div', {'id': 'lbNumber'}).injectInside(this.bottom);
		new Element('div', {'styles': {'clear': 'both'}}).injectInside(this.bottom);

		var nextEffect = this.nextEffect.bind(this);
		this.fx = {
// 1.11		overlay: this.overlay.effect('opacity', {duration: 500}).hide(),
            overlay: new Fx.Tween(this.overlay,{property : 'opacity', duration: 500}),
// 1.11		resize: this.center.effects($extend({duration: this.options.resizeDuration, onComplete: nextEffect}, this.options.resizeTransition ? {transition: this.options.resizeTransition} : {})),
            resize: new Fx.Morph(this.center,$extend({duration: this.options.resizeDuration, onComplete: nextEffect }, this.options.resizeTransition ? {transition: this.options.resizeTransition} : {})),
// 1.11		image: this.image.effect('opacity', {duration: 500, onComplete: nextEffect}),
            image: new Fx.Tween(this.image,{property: 'opacity', duration: 500, transition: Fx.Transitions.Linear, onComplete: nextEffect }),
// 1.11		bottom: this.bottom.effect('margin-top', {duration: 400, onComplete: nextEffect})
            bottom: new Fx.Tween(this.bottom,{property: 'margin-top', duration: 400, onComplete: nextEffect})
		};

		this.preloadPrev = new Image();
		this.preloadNext = new Image();

	},

	click: function(link){
		if (link.rel.length == 8) return this.show(link.href, link.title);

		var j, imageNum, images = [];
		this.anchors.each(function(el){
			if (el.rel == link.rel){
				for (j = 0; j < images.length; j++) if(images[j][0] == el.href) break;
				if (j == images.length){
					images.push([el.href, el.title]);
					if (el.href == link.href) imageNum = j;
				}
			}
		}, this);
		return this.opennt(images, imageNum);
	},

	show: function(url, title){
		return this.open([[url, title]], 0);
	},

	opennt: function(images, imageNum){
		this.images = images;
		this.position();
		this.setup(true);
		this.top = window.getScrollTop() + (window.getHeight() / 15);
		this.center.setStyles({top: this.top, display: ''});
		this.fx.overlay.start(0.8);
		//#malaa: timer on opening
//		this.setTimer(true);
//		this.timerDir = 'next';
		//#malaa
		return this.changeImage(imageNum);
	},

	open: function(images, imageNum){
		this.images = images;
		this.position();
		this.setup(true);
		this.top = window.getScrollTop() + (window.getHeight() / 15);
		this.center.setStyles({top: this.top, display: ''});
		this.fx.overlay.start(0.8);
		//#malaa: timer on opening
		this.setTimer(true);
		this.timerDir = 'next';
		//#malaa
		return this.changeImage(imageNum);
	},

	//#malaa
	setTimer: function(set) {
	    //unset
        if(this.timerVal)
            $clear(this.timerVal);
	    //set timer if required
	    if(set) {
	        if(this.options.timerDuration)
	            this.timerVal = this.timer.delay(this.options.timerDuration, this);
	    }
	},

	timer: function() {
	    //call the next image
	    if(this.timerDir == 'next')
	        this.next();
        else if (this.timerDir == 'previous')
            this.previous();
	},
	//#malaa

	position: function(){
		this.overlay.setStyles({'top': window.getScrollTop(), 'height': window.getHeight()});
	},

	setup: function(open){
		var elements = $A(document.getElementsByTagName('object'));
		elements.extend(document.getElementsByTagName(window.ie ? 'select' : 'embed'));
		elements.each(function(el){
			if (open) el.lbBackupStyle = el.style.visibility;
			el.style.visibility = open ? 'hidden' : el.lbBackupStyle;
		});
		var fn = open ? 'addEvent' : 'removeEvent';
		window[fn]('scroll', this.eventPosition)[fn]('resize', this.eventPosition);
// 1.1
//      document[fn]('keydown', this.eventKeyDown);
// 1.1
// 1.2
		$(window.document)[fn]('keydown',function(e){
			if(e.key == 'right' || e.key == 'space'){ this.next(e); }
			else if(e.key == 'left'){ this.previous(e); }
			else if(e.key == 'esc'){ this.close(e); }
		}.bindWithEvent(this));
//1.2
		this.step = 0;
	},

//	keyboardListener: function(event){
//		switch (event.keyCode){
//			case 27: case 88: case 67: this.close(); break;
//			case 37: case 80: this.previous(); break;
//			case 39: case 78: this.next();
//		}
//	},

	previous: function(){
	    //#malaa
	    //set direction to next
	    this.timerDir = 'previous';
	    //#malaa
		return this.changeImage(this.activeImage-1);
	},

	next: function(){
	    //#malaa
	    //set direction to next
	    this.timerDir = 'next';
	    //#malaa
		return this.changeImage(this.activeImage+1);
	},

	changeImage: function(imageNum){
		if (this.step || (imageNum < 0) || (imageNum >= this.images.length)) return false;
		this.step = 1;
		this.activeImage = imageNum;

		this.bottomContainer.style.display = this.prevLink.style.display = this.nextLink.style.display = 'none';
//		this.fx.image.hide();
        this.fx.image.set(0);
		this.center.className = 'lbLoading';

		this.preload = new Image();
		this.preload.onload = this.nextEffect.bind(this);
		this.preload.src = this.images[imageNum][0];
	    //#malaa: reset timer
	    this.setTimer(true);
        //#malaa
		return false;
	},

	nextEffect: function(){
		switch (this.step++){
		case 1:
			this.center.className = '';
			this.image.style.backgroundImage = 'url('+this.images[this.activeImage][0]+')';
			this.image.style.width = this.bottom.style.width = this.preload.width+'px';
			this.image.style.height = this.prevLink.style.height = this.nextLink.style.height = this.preload.height+'px';

//1.11      this.caption.setHTML(this.images[this.activeImage][1] || '');
			this.caption.set('html', this.images[this.activeImage][1] || '');
//1.11      this.number.setHTML((!this.options.showCounter || (this.images.length == 1)) ? '' : 'Image '+(this.activeImage+1)+' of '+this.images.length);
			this.number.set('html', (!this.options.showCounter || (this.images.length == 1)) ? '' : 'Image '+(this.activeImage+1)+' of '+this.images.length);

			if (this.activeImage) this.preloadPrev.src = this.images[this.activeImage-1][0];
			if (this.activeImage != (this.images.length - 1)) this.preloadNext.src = this.images[this.activeImage+1][0];
			if (this.center.clientHeight != this.image.offsetHeight){
				this.fx.resize.start({height: this.image.offsetHeight});
				break;
			}
			this.step++;
		case 2:
			if (this.center.clientWidth != this.image.offsetWidth){
				this.fx.resize.start({width: this.image.offsetWidth, marginLeft: -this.image.offsetWidth/2});
				break;
			}
			this.step++;
		case 3:
			this.bottomContainer.setStyles({top: this.top + this.center.clientHeight, height: 0, marginLeft: this.center.style.marginLeft, display: ''});
			this.fx.image.start(1);
			break;
		case 4:
			if (this.options.animateCaption){
				this.fx.bottom.set(-this.bottom.offsetHeight);
				this.bottomContainer.style.height = '';
				this.fx.bottom.start(0);
				break;
			}
			this.bottomContainer.style.height = '';
		case 5:
			if (this.activeImage) this.prevLink.style.display = '';
			if (this.activeImage != (this.images.length - 1)) this.nextLink.style.display = '';
			this.step = 0;
		}
	},

	close: function(){
		if (this.step < 0) return;
		this.step = -1;
		if (this.preload){
// 1.11     this.preload.onload = Class.empty;
			this.preload.onload = $empty;
			this.preload = null;
		}
    	for (var f in this.fx) this.fx[f].stop;

		this.center.style.display = this.bottomContainer.style.display = 'none';
		this.fx.overlay.chain(this.setup.pass(false, this)).start(0);
		//#malaa: clear timer
        this.setTimer(false);
		//#malaa
		return false;
	}
};

window.addEvent('load', Lightbox.init.bind(Lightbox));
