(function (cjs, an) {

var pa; // shortcut to reference prototypes
var liba={};var ssa={};var imga={};
liba.ssMetadata = [
		{name:"index_atlas_P_", frames: [[0,0,151,12]]},
		{name:"index_atlas_NP_", frames: [[452,708,300,325],[0,0,866,329],[452,331,450,375],[0,331,450,488]]}
];


// symbols:



(liba.Bitmap13 = function() {
	this.initialize(ssa["index_atlas_NP_"]);
	this.gotoAndStop(0);
}).prototype = pa = new cjs.Sprite();



(liba.Bitmap2 = function() {
	this.initialize(ssa["index_atlas_P_"]);
	this.gotoAndStop(0);
}).prototype = pa = new cjs.Sprite();



(liba.blurtile = function() {
	this.initialize(ssa["index_atlas_NP_"]);
	this.gotoAndStop(1);
}).prototype = pa = new cjs.Sprite();



(liba.lady = function() {
	this.initialize(ssa["index_atlas_NP_"]);
	this.gotoAndStop(2);
}).prototype = pa = new cjs.Sprite();



(liba.lady2 = function() {
	this.initialize(ssa["index_atlas_NP_"]);
	this.gotoAndStop(3);
}).prototype = pa = new cjs.Sprite();
// helper functions:

function mc_symbol_clone_small() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototypeSmall(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone_small;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(liba.Yellow_box_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFCC00").s().p("A3bF/IAAr+MAu3AAAIAAL+g");
	this.shape.setTransform(0,-99.25);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.Yellow_box_Layer_1, null, null);


(liba.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new liba.blurtile();
	this.instance.parent = this;
	this.instance.setTransform(441,-165);

	this.instance_1 = new liba.blurtile();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-421,-165);

	this.instance_2 = new liba.blurtile();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-1284,-164.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = pa = new cjs.MovieClip();
pa.nominalBounds = new cjs.Rectangle(-1284,-165,2591,329.5);


(liba.text_end_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AgHAIIAAgPIAPAAIAAAPg");
	this.shape.setTransform(119.625,-177.175);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AAWA4IgDAAQgRgBgFgHQgCgCgBgDQgBgGAAgJIAAgxIgRAAIAAgHIARAAIAAgYIAKgDIAAAbIAVAAIAAAHIgVAAIAAA4QABAGADACQAEAEAOgBIAAAKIgDAAg");
	this.shape_1.setTransform(114.125,-181.925);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AgFA9IAAhVIALAAIAABVgAgFgwIAAgMIALAAIAAAMg");
	this.shape_2.setTransform(109.1,-182.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AgdAgQgLgNABgTQAAgTALgMQALgNARAAQAKAAAIAFQAHAFAEAIIAAgPIAMAAIAABUIgMAAIAAgQQgIARgVAAIgBABQgRAAgLgNgAgUgYQgIAJAAAPQAAAQAIAJQAIAKANAAQAOAAAHgKQAHgJAAgQQAAgPgHgJQgIgKgNAAQgNAAgIAKg");
	this.shape_3.setTransform(101.4489,-180.6491);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AAYArIgXhIIgYBIIgNAAIgahVIANAAIAUBHIAZhHIALAAIAZBHIAThHIAMAAIgaBVg");
	this.shape_4.setTransform(90,-180.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AgbAhQgMgMAAgVQAAgSALgNQAMgNASAAQARAAALAMQAJAMABASIgBADIhCAAQAAARAJAIQAJAJAOAAQAPAAAMgKIAEAJQgNAKgTAAQgTAAgMgLgAAdgFQgBgOgHgIQgHgHgMAAQgLAAgIAIQgIAHgBAOIA3AAIAAAAg");
	this.shape_5.setTransform(73.7,-180.65);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AAZA+IAAg1QAAgLgEgGQgFgGgLAAQgKAAgKAHQgJAHAAAKIAAA0IgMAAIAAh7IAMAAIAAA2QAEgIAIgEQAJgFAJAAQAOAAAJAJQAIAIAAAPIAAA2g");
	this.shape_6.setTransform(63.8,-182.575);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AAWA4IgDAAQgRgBgFgHQgCgCgBgDQgBgGAAgJIAAgxIgRAAIAAgHIARAAIAAgYIAKgDIAAAbIAVAAIAAAHIgVAAIAAA4QABAGADACQAEAEAOgBIAAAKIgDAAg");
	this.shape_7.setTransform(55.375,-181.925);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#363636").s().p("AAWA4IgDAAQgRgBgFgHQgCgCgBgDQgBgGAAgJIAAgxIgRAAIAAgHIARAAIAAgYIAKgDIAAAbIAVAAIAAAHIgVAAIAAA4QABAGADACQAEAEAOgBIAAAKIgDAAg");
	this.shape_8.setTransform(44.275,-181.925);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#363636").s().p("AgkAIIAAgzIAMAAIAAA0QAAAZAVAAQANAAAIgIQAGgIAAgIIAAg1IANAAIAABVIgMAAIAAgPQgKAQgTABQggAAAAgkg");
	this.shape_9.setTransform(36.1,-180.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#363636").s().p("AgfAhQgMgMAAgVQAAgSAMgNQAMgNATAAQAUAAAMANQAMANgBASQABAVgMAMQgMAMgUgBQgUABgLgMgAgWgYQgIAKAAAOQAAARAIAIQAIAKAOAAQAPAAAIgKQAIgIAAgRQAAgOgIgKQgIgKgPAAQgOAAgIAKg");
	this.shape_10.setTransform(25.8,-180.65);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#363636").s().p("AAaA+IAAg1QgBgLgFgGQgEgGgLAAQgKAAgKAHQgJAHAAAKIAAA0IgMAAIAAh7IAMAAIAAA2QAFgIAHgEQAJgFAJAAQAOAAAJAJQAIAIAAAPIAAA2g");
	this.shape_11.setTransform(15.5,-182.575);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#363636").s().p("AAWA4IgDAAQgRgBgFgHQgCgCgBgDQgBgGAAgJIAAgxIgRAAIAAgHIARAAIAAgYIAKgDIAAAbIAVAAIAAAHIgVAAIAAA4QABAGADACQAEAEAOgBIAAAKIgDAAg");
	this.shape_12.setTransform(7.075,-181.925);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#363636").s().p("AgFA9IAAhVIALAAIAABVgAgEgwIAAgMIAKAAIAAAMg");
	this.shape_13.setTransform(2.05,-182.4);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#363636").s().p("AAZArIgYhIIgYBIIgNAAIgahVIANAAIAVBHIAYhHIALAAIAZBHIAThHIAMAAIgaBVg");
	this.shape_14.setTransform(-6.6,-180.6);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#363636").s().p("AgbAhQgLgMAAgVQAAgSALgNQALgNASAAQASAAAJAMQAKAMAAASIAAADIhCAAQABARAIAIQAJAJAOAAQAQAAAMgKIADAJQgNAKgTAAQgTAAgMgLgAAdgFQgBgOgHgIQgHgHgMAAQgLAAgIAIQgHAHgCAOIA3AAIAAAAg");
	this.shape_15.setTransform(-22.9,-180.65);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#363636").s().p("AAWA4IgDAAQgRgBgFgHQgCgCgBgDQgBgGAAgJIAAgxIgRAAIAAgHIARAAIAAgYIAKgDIAAAbIAVAAIAAAHIgVAAIAAA4QABAGADACQAEAEAOgBIAAAKIgDAAg");
	this.shape_16.setTransform(-30.925,-181.925);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#363636").s().p("AgdAgQgLgNABgTQAAgTALgMQALgNARAAQAKAAAIAFQAHAFAEAIIAAgPIAMAAIAABUIgMAAIAAgQQgIARgVAAIgBABQgRAAgLgNgAgUgYQgIAJAAAPQAAAQAIAJQAIAKANAAQAOAAAHgKQAHgJAAgQQAAgPgHgJQgIgKgNAAQgNAAgIAKg");
	this.shape_17.setTransform(-39.4011,-180.6491);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#363636").s().p("AggA3IACgKQAOAHAOAAQAeAAABgjIAAgJQgJASgVAAQgRAAgMgMQgKgLAAgTQAAgUAKgMQAMgNASAAQAJAAAIAFQAHAFAFAIIAAgPIAMAAIgBBJQAAAWgLAMQgLANgUAAQgPAAgPgHgAgVgpQgHAJAAAQQAAAPAHAIQAIAJAMAAQAOAAAIgJQAHgIABgQQAAgPgIgKQgHgJgOAAQgMAAgJAKg");
	this.shape_18.setTransform(-49.85,-178.925);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#363636").s().p("AAWA4IgDAAQgRgBgFgHQgCgCgBgDQgBgGAAgJIAAgxIgRAAIAAgHIARAAIAAgYIAKgDIAAAbIAVAAIAAAHIgVAAIAAA4QABAGADACQAEAEAOgBIAAAKIgDAAg");
	this.shape_19.setTransform(-62.975,-181.925);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#363636").s().p("AgFA9IAAhVIALAAIAABVgAgFgwIAAgMIALAAIAAAMg");
	this.shape_20.setTransform(-68,-182.4);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#363636").s().p("AAcArIgcgkIgbAkIgNAAIAjgrIghgqIAOABIAYAiIAbgiIANAAIghApIAiArg");
	this.shape_21.setTransform(-74.575,-180.625);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#363636").s().p("AgbAhQgMgMAAgVQAAgSALgNQAMgNASAAQARAAALAMQAJAMABASIgBADIhCAAQAAARAJAIQAJAJAOAAQAPAAAMgKIAEAJQgNAKgTAAQgTAAgMgLgAAdgFQgBgOgHgIQgHgHgMAAQgLAAgIAIQgIAHgBAOIA3AAIAAAAg");
	this.shape_22.setTransform(-83.8,-180.65);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#363636").s().p("AgbAhQgMgMAAgVQAAgSAMgNQALgNASAAQARAAAKAMQALAMgBASIAAADIhBAAQAAARAIAIQAJAJANAAQARAAALgKIAEAJQgNAKgTAAQgTAAgMgLgAAdgFQgBgOgHgIQgHgHgMAAQgLAAgIAIQgIAHgBAOIA3AAIAAAAg");
	this.shape_23.setTransform(-98.25,-180.65);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#363636").s().p("AAaA+IAAg1QgBgLgFgGQgEgGgLAAQgLAAgJAHQgJAHAAAKIAAA0IgMAAIAAh7IAMAAIAAA2QAFgIAHgEQAJgFAKAAQANAAAIAJQAJAIAAAPIAAA2g");
	this.shape_24.setTransform(-108.15,-182.575);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#363636").s().p("AgFA9IAAhuIgoAAIAAgLIBbAAIAAALIgoAAIAABug");
	this.shape_25.setTransform(-117.975,-182.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.text_end_Layer_1, null, null);


(liba.shadow_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new liba.Bitmap2();
	this.instance.parent = this;
	this.instance.setTransform(-75.5,-6);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.shadow_Layer_1, null, null);


(liba.Scene_1_images = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// images
	this.instance = new liba.lady();
	this.instance.parent = this;
	this.instance.setTransform(-1,0,0.67,0.67);

	this.instance_1 = new liba.lady2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-3,-60,0.68,0.68);

	this.instance_2 = new liba.Bitmap13();
	this.instance_2.parent = this;
	this.instance_2.setTransform(0,-100);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},10).to({state:[]},39).to({state:[{t:this.instance_1}]},10).to({state:[]},44).to({state:[{t:this.instance_2}]},10).wait(82));

}).prototype = pa = new cjs.MovieClip();


(liba.logo_fast_lane_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#232021").s().p("AhwCIIA5kPICoAAIgIApIh6AAIgPBIIBzAAIgJAoIhyAAIgQBNIB+AAIgIApg");
	this.shape.setTransform(57.1797,-12.8776,0.6095,0.6095);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#232021").s().p("AAlCIIhejHIgqDHIgrAAIA4kPIAyAAIBdDHIAqjGIAsAAIg5EOg");
	this.shape_1.setTransform(41.0882,-12.8929,0.6095,0.6095);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#232021").s().p("ABPCIIgMhCIhrAAIgnBCIg0AAICjkPIAwAAIA0EPgAgOAaIBHAAIgNhqg");
	this.shape_2.setTransform(22.4976,-12.8929,0.6095,0.6095);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#232021").s().p("AhYCHIA4kOIAuAAIgwDmIB8ABIgJAog");
	this.shape_3.setTransform(8.1889,-12.8929,0.6095,0.6095);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#232021").s().p("AhNCIIAxjnIhUAAIAJgoIDXAAIgIAoIhVAAIgwDng");
	this.shape_4.setTransform(-11.1331,-12.8929,0.6095,0.6095);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#232021").s().p("Ag3CKQgNgBgMgFQgYgIgMgOIAbgiQALAKATAHQAVAHAPAAQAZAAAOgJQAOgJAEgUIABgGIAAgGIgBgFIgCgEQgDgGgHgDQgGgFgNgEIgigNQgggMgKgRQgMgRAGgeQAFgYAQgRQASgRAVgIQAXgIAaAAQAjAAAUAHQAJAEAIAGQALAJAEAGIgeAfQgTgWgoAAQgWAAgPAIQgPAHgEAQIgBANQABAGACAEQADADAHAFIASAJIAHADIAgALQANAFAMAJQALAHAEAIQAKASgHAeQgFAVgKAPQgLAPgQAJQgSAKgQADQgQAFgUAAQgNAAgOgDg");
	this.shape_5.setTransform(-26.5846,-12.9081,0.6095,0.6095);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#232021").s().p("ABQCIIgMhCIhtAAIgoBCIg0AAICmkPIAwAAIA1EPgAgOAaIBIAAIgNhqg");
	this.shape_6.setTransform(-43.2704,-12.8929,0.6095,0.6095);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#232021").s().p("AhvCIIA6kPIClAAIgJAoIh1AAIgQBLIBvAAIgJAoIhvAAIgYB0g");
	this.shape_7.setTransform(-54.3943,-12.8929,0.6095,0.6095);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#1A4094").s().p("AgDAfIAAgbIgWgiIAJAAIAQAcIASgcIAIAAIgWAiIAAAbg");
	this.shape_8.setTransform(-23.1103,12.0977,0.6095,0.6095);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#1A4094").s().p("AgUAfIAAg9IAUAAQASABAAAPQABAKgLADQANACAAAMQAAAIgFAEQgGAGgJAAgAgMAYIAMAAQAOAAAAgLQAAgLgOAAIgMAAgAgMgDIALAAQAMAAAAgLQAAgJgLAAIgMAAg");
	this.shape_9.setTransform(-27.3465,12.0977,0.6095,0.6095);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#1A4094").s().p("AgXAfIAAg9IAUAAQAMAAAIAJQAHAIAAANQAAAOgHAJQgIAIgMAAgAgQAYIAMAAQAUABAAgZQAAgYgUABIgMAAg");
	this.shape_10.setTransform(-34.4628,12.0977,0.6095,0.6095);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#1A4094").s().p("AgRAfIAAg9IAiAAIAAAHIgbAAIAAAUIAaAAIAAAFIgaAAIAAAWIAcAAIAAAHg");
	this.shape_11.setTransform(-38.958,12.0977,0.6095,0.6095);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#1A4094").s().p("AANAfIgPgbIgMAAIAAAbIgHAAIAAg9IAVAAQAUABAAAQQAAANgOADIAQAcgAgOgCIAOAAQAMAAAAgLQAAgKgNAAIgNAAg");
	this.shape_12.setTransform(-43.2704,12.0977,0.6095,0.6095);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#1A4094").s().p("AgRAfIAAg9IAjAAIAAAHIgbAAIAAAUIAZAAIAAAFIgZAAIAAAWIAbAAIAAAHg");
	this.shape_13.setTransform(-47.6438,12.0977,0.6095,0.6095);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#1A4094").s().p("AANAfIgNgyIAAAAIgNAyIgHAAIgRg9IAHAAIAOAzIAOgzIAGAAIANAzIAOgzIAHAAIgRA9g");
	this.shape_14.setTransform(-52.8096,12.0977,0.6095,0.6095);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#1A4094").s().p("AgTAXQgHgJAAgOQAAgNAHgJQAIgIALgBQAMABAIAIQAHAJAAANQAAAOgHAJQgIAIgMAAQgLAAgIgIgAgNgRQgFAGAAALQAAALAFAHQAFAIAIgBQAJABAFgIQAFgHAAgLQAAgLgFgGQgFgIgJABQgIgBgFAIg");
	this.shape_15.setTransform(-58.3258,12.0977,0.6095,0.6095);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#1A4094").s().p("AgUAfIAAg9IAUAAQAVABAAARQAAARgVAAIgMAAIAAAagAgMAAIALAAQAOAAAAgMQAAgMgOABIgLAAg");
	this.shape_16.setTransform(-62.882,12.0977,0.6095,0.6095);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#1A4094").s().p("AgIAJQgEgEAAgFQAAgEAEgEQADgEAFAAIAAAAQAGAAADAEQAEAEAAAEQAAAFgEAEQgDAEgGAAQgFAAgDgEg");
	this.shape_17.setTransform(-7.6132,9.0368,0.6094,0.6094);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#1A4094").s().p("AAAANQgEAAgEgEQgEgDAAgGQAAgEAEgEQAEgEAEAAQAGAAADAEQAEAEAAAEQAAAFgEAEQgEAEgFAAg");
	this.shape_18.setTransform(-10.3384,9.7832,0.6094,0.6094);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#1A4094").s().p("AgIAJQgEgDAAgGQAAgEAEgEQAEgEAEAAQAFAAAEAEQAEAEAAAEQAAAGgDADQgEAEgGAAQgEAAgEgEg");
	this.shape_19.setTransform(-10.9325,6.6298,0.6094,0.6094);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#1A4094").s().p("AgKAIQgDgEABgFQABgFAEgDQAEgEAFABQAFABADAEQAEAEgBAFQgBAFgEAEQgEACgEAAQgFAAgFgFg");
	this.shape_20.setTransform(-8.5721,11.9702,0.6094,0.6094);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#1A4094").s().p("AgBANQgFAAgEgFQgDgEABgFQABgFAEgDQAEgEAFABQAFABADAEQAEAFgBAEQgBAFgEAEQgEACgEAAg");
	this.shape_21.setTransform(-10.3392,14.1639,0.6094,0.6094);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#1A4094").s().p("AgKAIQgDgEABgFQABgFAEgDQAEgEAFABQAFABADAEQAEAFgBAEQgBAFgEAEQgEACgEAAQgGAAgEgFg");
	this.shape_22.setTransform(-12.6646,11.9702,0.6094,0.6094);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#1A4094").s().p("AgDANQgEgCgEgFQgCgEACgFQABgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgEAJgJAAg");
	this.shape_23.setTransform(-7.6139,14.9,0.6094,0.6094);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgEABgFQACgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgEAJgJAAg");
	this.shape_24.setTransform(-7.7638,17.703,0.6094,0.6094);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgEABgFQACgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgEAJgJAAg");
	this.shape_25.setTransform(-10.9325,17.3069,0.6094,0.6094);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#1A4094").s().p("AgLAEQgCgEACgFQADgFAFgBQAEgCAFACQAFADABAFQACAEgCAFQgDAFgFABIgEABQgJAAgCgJg");
	this.shape_26.setTransform(-5.1358,16.7181,0.6094,0.6094);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#1A4094").s().p("AgMAEQgBgEACgEQADgFAFgCQAEgCAFACQAFADACAFQABAEgCAFQgDAFgFACIgEAAQgIAAgEgJg");
	this.shape_27.setTransform(-3.5897,19.0641,0.6094,0.6094);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#1A4094").s().p("AgFAMQgFgDgBgEQgCgFACgEQADgFAFgCQAEgCAFADQAFACACAFQABAEgCAFQgDAFgFACIgEAAg");
	this.shape_28.setTransform(-6.4027,20.5975,0.6094,0.6094);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#1A4094").s().p("AgHALQgEgEgBgFQgBgEADgFQAEgEAFgBQAEgBAFADQAEAEABAFQABAEgDAFQgEAEgFABIgCAAQgDAAgEgCg");
	this.shape_29.setTransform(-2.0511,16.7223,0.6094,0.6094);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#1A4094").s().p("AgGALQgFgEgBgFQgBgEADgFQADgEAGgBQAEgBAEADQAFADABAGQABAEgDAFQgFAFgGAAQgDAAgDgCg");
	this.shape_30.setTransform(0.5844,17.7278,0.6094,0.6094);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#1A4094").s().p("AgGALQgFgDgBgFQgBgFADgEQADgEAGgCQAEAAAEADQAGADAAAFQABAFgDAEQgEAFgHAAQgEAAgCgCg");
	this.shape_31.setTransform(-0.7866,20.5972,0.6094,0.6094);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#1A4094").s().p("AAAANQgFAAgDgEQgEgEAAgFQAAgEAEgEQAEgEAEAAQAFAAAEADQADADABAGQAAAFgEAEQgEAEgFAAg");
	this.shape_32.setTransform(0.4473,14.9019,0.6094,0.6094);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#1A4094").s().p("AgIAKQgEgEAAgGQAAgEAEgEQADgEAFAAIAAAAQAGAAADAEQAEADAAAFQAAAFgEAEQgEAEgFAAQgEAAgEgDg");
	this.shape_33.setTransform(3.1725,14.1706,0.6094,0.6094);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#1A4094").s().p("AgIAJQgEgEAAgFQAAgFADgDQAEgEAFAAQAFAAAEADQAEAEAAAFQAAAFgEAEQgEAEgFAAQgFAAgDgEg");
	this.shape_34.setTransform(3.7531,17.3088,0.6094,0.6094);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#1A4094").s().p("AgBANQgFAAgDgFQgEgEABgFQABgFAEgDQAFgEAEABQAFABAEAEQADAFgBAEQgBAFgEAEQgEACgEAAg");
	this.shape_35.setTransform(1.4025,11.9702,0.6094,0.6094);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#1A4094").s().p("AgBANQgFAAgDgFQgEgEABgFQABgFAEgDQAFgDAEAAQAFABADAEQAEAFgBAEQAAAGgFADQgEACgEAAg");
	this.shape_36.setTransform(3.1742,9.7811,0.6094,0.6094);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#1A4094").s().p("AgJAIQgEgEABgFQABgFAEgDQAFgDAEAAQAFABADAEQAEAFgBAEQAAAFgFAEQgEACgEAAQgGAAgDgFg");
	this.shape_37.setTransform(5.4898,11.9748,0.6094,0.6094);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgFACgEQABgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgDAGgEACIgGABg");
	this.shape_38.setTransform(0.4526,9.0501,0.6094,0.6094);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgEABgEQACgFAFgDQAFgDAEACQAFACADAEQACAFgBAEQgDAJgKAAg");
	this.shape_39.setTransform(0.5844,6.2166,0.6094,0.6094);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgFABgEQACgFAFgCQAEgDAFACQAGABACAFQACAEgBAFQgCAGgFACQgCABgEAAg");
	this.shape_40.setTransform(3.7531,6.6431,0.6094,0.6094);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#1A4094").s().p("AgFAMQgFgCgBgFQgCgFACgEQACgEAGgDQAEgCAFADQAFACACAFQABAEgCAFQgDAFgFACIgEAAg");
	this.shape_41.setTransform(-2.0383,7.222,0.6094,0.6094);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#1A4094").s().p("AgFAMQgEgCgDgGQgBgEACgFQADgFAFgBQAEgCAFACQAFADABAFQACAEgCAFQgDAFgFACIgEAAQgCAAgDgBg");
	this.shape_42.setTransform(-3.5797,4.8661,0.6094,0.6094);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#1A4094").s().p("AgFAMQgEgCgDgGQgBgEACgFQADgFAFgBQAEgCAFACQAFADABAFQACAEgCAFQgDAFgFABIgEABQgCAAgDgBg");
	this.shape_43.setTransform(-0.7842,3.3427,0.6094,0.6094);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#1A4094").s().p("AgGALQgFgDgBgGQgBgEADgEQADgFAGgBQAEAAAFADQAEADABAFQABAEgDAFQgEAFgHAAQgEAAgCgCg");
	this.shape_44.setTransform(-5.1185,7.2218,0.6094,0.6094);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#1A4094").s().p("AAAANQgDAAgEgCQgEgDgBgFQgBgFADgEQADgEAGgCQAEgBAEAEQAFADABAFQABAFgDAEQgEAFgFAAg");
	this.shape_45.setTransform(-7.7486,6.2117,0.6094,0.6094);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#1A4094").s().p("AgGALQgFgEgBgFQgBgEADgFQADgEAGgBQAEgBAEADQAGADAAAGQABAEgDAFQgEAEgFABIgCAAQgDAAgDgCg");
	this.shape_46.setTransform(-6.3927,3.3469,0.6094,0.6094);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#1A4094").s().p("AAXA/IgVgoIgbAAIAAAoIgYAAIAAh9IAyAAQAVAAANAMQAMAMAAATQAAAYgWAMIAZAugAgZABIAZAAQALAAAGgGQAGgGAAgIQAAgVgXAAIgZAAg");
	this.shape_47.setTransform(53.2026,11.9769,0.6094,0.6094);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#1A4094").s().p("AAjA/IgJgXIgzAAIgJAXIgZAAIAwh9IAXAAIAwB9gAASASIgSgxIgRAxIAjAAg");
	this.shape_48.setTransform(43.7423,11.9769,0.6094,0.6094);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#1A4094").s().p("AgqA/IAAh9IBVAAIAAAXIg8AAIAAAcIA8AAIAAAWIg8AAIAAAdIA8AAIAAAXg");
	this.shape_49.setTransform(34.7695,11.9769,0.6094,0.6094);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#1A4094").s().p("AgoA/IAAh9IAYAAIAABlIA6AAIAAAYg");
	this.shape_50.setTransform(26.726,11.9769,0.6094,0.6094);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#1A4094").s().p("AgqAuQgTgTAAgbQABgaASgTQATgTAaAAQASAAAPAJQAPAIAIAPIgVANQgKgVgZAAQgQAAgLAMQgLAMAAAQQAAARALAMQALAMAQAAQAaAAAKgYIAXAMQgJARgPAJQgPAKgUAAQgbAAgSgTg");
	this.shape_51.setTransform(17.6629,11.9124,0.6093,0.6093);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#1A4094").s().p("AgIAJQgEgDABgGQgBgEAEgEQAEgEAEAAQAFAAAEAEQADAEAAAEQAAAGgDADQgEAEgFgBQgEABgEgEgAgHgHQgDADAAAEQAAAFADADQADADAEAAQAEAAAEgDQADgDAAgFQAAgEgDgDQgEgDgEAAQgEAAgDADg");
	this.shape_52.setTransform(58.1384,8.8997,0.6094,0.6094);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#1A4094").s().p("AADAHIgCgFIgEAAIAAAFIgBAAIAAgNIAEAAQAFAAAAAFQAAAAAAABQgBAAAAAAQAAABgBAAQAAAAgBABIADAFgAgDABIADAAQABAAAAgBQABAAAAAAQABAAAAAAQAAgBAAAAQAAgBAAgBQAAAAgBgBQAAAAgBAAQAAgBgBAAIgDAAg");
	this.shape_53.setTransform(58.1336,8.8509,0.6093,0.6093);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.logo_fast_lane_Layer_1, null, null);


(liba.invisbtn = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FF00FF").s().p("EgXbAu4MAAAhdvMAu3AAAMAAABdvg");
	this.shape._off = true;

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(3).to({_off:false},0).wait(1));

}).prototype = pa = new cjs.MovieClip();
pa.nominalBounds = new cjs.Rectangle(-150,-300,300,600);


(liba.hertz_logo_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#121314").s().p("AifCrQgmgqgChHQgChAAchBQAbhBAqghQA/gyBIAAQAfAAAdAIQA1APAcAnQAhAsgFBNQgDAmgJAeIkbAAQgNBfBbAAQAgAAAngNQAhgLAQgMIArBJQgjAagxAPQgvAPguAAQhVAAgrgxgAgnhqQgaAXgHAaICuAAQADgRgHgSQgMgkgvgEIgLAAQglAAgeAag");
	this.shape.setTransform(-13.2308,-1.5846,0.6098,0.6098);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#121314").s().p("AjWDUIAUheID1jnIjDAAIAUhiIFTAAIgUBeIj3DoIDGAAIgWBhg");
	this.shape_1.setTransform(45.4215,-1.5998,0.6098,0.6098);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#121314").s().p("AicDYIA1j3QAKgyARggQARghAdgYQAigeAvgKQAygLA4AOIgVBiQgmgDgVAEQgcAFgSARQgMANgIAYQgHASgIApIgsDOg");
	this.shape_2.setTransform(8.6379,-1.8266,0.6098,0.6098);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#121314").s().p("AApEFIAmi1Ii9AAIgoC1IhtAAIBvoJIBuAAIg0DzIC9AAIA0jzIBtAAIhvIJg");
	this.shape_3.setTransform(-40.6609,-4.5724,0.6098,0.6098);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#121314").s().p("Ag9D+QgvgSgRghQgPgdAAghQgBgbAJgqIBHlQIBsAAIgUBiIBzAAIgVBiIhzAAIgbCDQgJApgBAMQgDAaALALQAUAWBKgJIgTBbQgcAIgZAAQgfAAgdgLg");
	this.shape_4.setTransform(26.1676,-4.3373,0.6098,0.6098);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AuMAwIAVhgIcEAAIgVBgg");
	this.shape_5.setTransform(-3.1525,17.4849,0.6095,0.6095);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.hertz_logo_Layer_1, null, null);


(liba.copy_2_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AABAGIgLAVIgJgGIAOgSIgUgFIACgJIAVAJIgDgYIAJAAIAAAYIASgJIAEAJIgTAFIAPAUIgJAEg");
	this.shape.setTransform(32.625,-290.75);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AgIAKIAAgTIARAAIAAATg");
	this.shape_1.setTransform(29.75,-280.375);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AgXAwIgMgHIAEgLQAPALAQAAQAXAAAAgRQAAgHgEgEQgFgDgLgEIgOgFQgMgDgGgFQgGgGAAgLQAAgOALgHQAJgGAQAAQASAAANAIIgEAKQgNgHgNAAQgXAAAAAPQAAAHADADQADADAKADIAEABIAKAEQAOAEAGAEQAHAHAAAMQAAAPgLAIQgKAGgOAAQgNAAgLgEg");
	this.shape_2.setTransform(22.6,-284.425);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AgWAwIgNgHIAFgLQAPALAPAAQAXAAAAgRQAAgHgFgEQgDgDgMgEIgOgFQgMgDgGgFQgGgGAAgLQAAgOAKgHQAKgGAPAAQAUAAAMAIIgEAKQgNgHgOAAQgWAAAAAPQAAAHADADQADADALADIADABIAKAEQAOAEAGAEQAHAHAAAMQAAAPgLAIQgKAGgPAAQgMAAgKgEg");
	this.shape_3.setTransform(13.3,-284.425);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AggAmQgNgOAAgXQAAgXANgPQANgOAVAAQAVAAAMANQAMANAAAWIAAAFIhOAAQAAASAKALQALAKAPAAQAUAAAOgLIAEAKQgQAMgWAAQgXAAgOgOgAAjgHQgCgQgIgIQgJgJgNAAQgNAAgKAJQgJAJgCAPIBCAAIAAAAg");
	this.shape_4.setTransform(2.9,-284.425);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AgGBJIAAiRIANAAIAACRg");
	this.shape_5.setTransform(-5.15,-286.725);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AgZAzIgBhjIAPAAIAAARQAIgTAUAAIAKABIgBAMIgKgBQgNAAgHAJQgHAJAAARIAAA2g");
	this.shape_6.setTransform(-16.7,-284.525);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AgkAmQgOgOAAgYQAAgWAOgPQAOgOAWAAQAYAAAOAOQANAPAAAWQAAAYgOAOQgNAOgYAAQgXAAgNgOgAgagdQgKALAAASQAAATAKALQAKALAQAAQASAAAJgLQAKgLAAgTQAAgSgKgLQgJgLgSAAQgQAAgKALg");
	this.shape_7.setTransform(-27.175,-284.425);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.copy_2_Layer_1, null, null);


(liba.copy_1_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AgXAwIgMgHIAEgLQAPALAQAAQAXAAAAgRQAAgHgEgEQgFgDgLgEIgOgFQgMgDgGgFQgGgGAAgLQAAgOALgHQAJgGAQAAQASAAANAIIgEAKQgNgHgNAAQgXAAAAAPQAAAHADADQADADAKADIAEABIAKAEQAOAEAGAEQAHAHAAAMQAAAPgLAIQgKAGgOAAQgNAAgLgEg");
	this.shape.setTransform(120.35,-187.925);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AgiA8QgNgOAAgYQAAgXAMgOQANgOAVAAQAMAAAJAFQAKAGAEAKIAAhBIANAAIABCRIgOAAIAAgUQgEAKgKAGQgJAGgMAAQgVAAgMgOgAgYgHQgJAKAAATQAAATAJALQAIALAQAAQAPAAAJgLQAKgLAAgUQAAgSgKgKQgJgLgPAAQgQAAgIALg");
	this.shape_1.setTransform(109.025,-190.125);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AAeAzIAAg5QAAghgZAAQgLAAgKAHQgKAIgCAMIAAA/IgOAAIgBhjIAOAAIAAASQAFgKAKgFQAKgFALAAQAlAAAAAsIAAA5g");
	this.shape_2.setTransform(97.225,-188.025);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AgkAmQgOgOAAgYQAAgWAOgPQAOgOAWAAQAYAAAOAOQANAPAAAWQAAAYgOAOQgNAOgYAAQgXAAgNgOgAgagdQgKALAAASQAAATAKALQAKALAQAAQASAAAJgLQAKgLAAgTQAAgSgKgLQgJgLgSAAQgQAAgKALg");
	this.shape_3.setTransform(85.025,-187.925);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AgcAmQgOgOAAgXQAAgXAOgPQAPgOAWAAQAUAAAMAKIgFAKQgLgJgPAAQgRAAgKALQgKALAAATQAAASAKALQAKALAQAAQAQAAANgKIAFAKQgNALgWAAQgWAAgOgOg");
	this.shape_4.setTransform(74.025,-187.925);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AggAmQgNgOAAgXQAAgXANgPQANgOAWAAQAUAAAMANQAMANAAAWIAAAFIhOAAQAAASAKALQALAKAPAAQAUAAANgLIAFAKQgQAMgWAAQgXAAgOgOgAAjgHQgCgQgIgIQgJgJgNAAQgNAAgKAJQgJAJgCAPIBCAAIAAAAg");
	this.shape_5.setTransform(63.2,-187.925);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AgWAwIgNgHIAFgLQAPALAPAAQAXAAAAgRQAAgHgEgEQgFgDgLgEIgOgFQgMgDgGgFQgGgGAAgLQAAgOALgHQAJgGAQAAQATAAAMAIIgEAKQgMgHgOAAQgXAAAAAPQAAAHADADQADADALADIADABIAKAEQAOAEAGAEQAHAHAAAMQAAAPgLAIQgJAGgPAAQgNAAgKgEg");
	this.shape_6.setTransform(53.1,-187.925);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AghA3QgNgUAAgiQAAgkANgSQAMgUAWABQAXAAALATQAMATAAAjQAAAigMAUQgLASgXAAQgWAAgMgSgAgWgsQgJARAAAcQAAA8AgABQAfgBAAg8QAAgdgIgQQgIgQgPAAQgPAAgIAQg");
	this.shape_7.setTransform(36.625,-190.05);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#363636").s().p("AgXBHIgPgGIAEgLQAGADAIACQAKADAHAAQAPgBAKgHQAJgIAAgOQAAgOgJgIQgKgHgRAAIgJAAIAAgLIAJAAQAhgBAAgbQAAgLgJgGQgJgHgMAAQgXAAgNAPIgHgJQAPgTAdABQASAAANAKQAMAJgBARQABAMgIAJQgGAJgNADQAOADAIAJQAJAKAAANQAAAUgOALQgNALgVgBQgLAAgKgCg");
	this.shape_8.setTransform(24.75,-190.05);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#363636").s().p("AAeAzIAAg5QAAghgZAAQgLAAgKAHQgKAIgCAMIAAA/IgOAAIgBhjIAOAAIAAASQAFgKAKgFQAKgFALAAQAlAAAAAsIAAA5g");
	this.shape_9.setTransform(7.175,-188.025);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#363636").s().p("AgGBHIAAhjIANAAIAABjgAgGg5IAAgNIANAAIAAANg");
	this.shape_10.setTransform(-1.425,-190);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#363636").s().p("AgfAmQgPgOAAgXQAAgXAOgPQANgOAWAAQAUAAAMANQAMANAAAWIAAAFIhOAAQAAASAKALQAKAKAQAAQAUAAAOgLIAEAKQgQAMgWAAQgWAAgOgOgAAigHQgBgQgIgIQgJgJgNAAQgNAAgKAJQgJAJgCAPIBBAAIAAAAg");
	this.shape_11.setTransform(-15.3,-187.925);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_12.setTransform(-24.725,-189.475);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#363636").s().p("AgiAlQgNgOAAgXQAAgWANgPQANgOAVAAQAMAAAJAFQAJAGAEAJIAAgSIAOAAIAABjIgOAAIAAgTQgKAVgYAAQgVAAgNgPgAgXgdQgKALAAASQAAASAKAMQAJALAPAAQAQAAAJgLQAIgMAAgSQAAgSgIgLQgJgLgQAAQgPAAgJALg");
	this.shape_13.setTransform(-34.725,-187.925);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#363636").s().p("AglBBIACgMQAQAIARAAQAkAAAAgpIAAgLQgKAVgZAAQgVAAgMgNQgNgOAAgWQAAgYANgOQAMgOAWAAQALAAAJAFQAJAGAFAJIABgSIANAAIAABXQAAAagOAOQgNAOgXAAQgTAAgQgHgAgYgxQgJALAAATQAAASAJAKQAJAKAPAAQAPAAAKgLQAJgKAAgSQAAgSgJgLQgJgLgQAAQgOAAgKALg");
	this.shape_14.setTransform(-47.025,-185.925);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#363636").s().p("AgfAmQgOgOgBgXQAAgXAOgPQAOgOAUAAQAVAAAMANQALANAAAWIAAAFIhNAAQAAASAKALQALAKAQAAQASAAAOgLIAFAKQgPAMgXAAQgXAAgNgOgAAigHQAAgQgJgIQgIgJgOAAQgNAAgJAJQgKAJgBAPIBAAAIAAAAg");
	this.shape_15.setTransform(-64.2,-187.925);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#363636").s().p("AAeBJIAAg+QAAgOgGgHQgFgHgNAAQgNAAgLAJQgLAIAAAMIAAA9IgOAAIAAiRIAOAAIAABAQAFgKAKgFQAKgFALAAQAQAAAKAKQAKAKAAASIAAA/g");
	this.shape_16.setTransform(-75.8,-190.225);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_17.setTransform(-85.775,-189.475);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_18.setTransform(-98.825,-189.475);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#363636").s().p("AgGBHIAAhjIANAAIAABjgAgGg5IAAgNIANAAIAAANg");
	this.shape_19.setTransform(-104.675,-190);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#363636").s().p("AAhAyIghgpIggApIgPAAIApgyIgmgxIAPAAIAdAoIAggoIAPAAIgnAxIAoAyg");
	this.shape_20.setTransform(-112.425,-187.925);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#363636").s().p("AgpBHIAAiNIBQAAIAAAMIhCAAIAAAyIA/AAIAAAMIg/AAIAAA3IBFAAIAAAMg");
	this.shape_21.setTransform(-123.2,-190);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.copy_1_Layer_1, null, null);


(liba.button_base_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AgbAuIAAhbIA1AAIAAAIIgrAAIAAAhIAoAAIAAAHIgoAAIAAAjIAtAAIAAAIg");
	this.shape.setTransform(46.225,-0.075);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AAYAuIgMggQgCgFgDgCQgDgDgGAAIgVAAIAAAqIgKAAIAAhbIAdAAQAOAAAIAFQAIAGAAANQAAAKgEAFQgFAGgJABQAFABADADIACADIADAFIANAhgAgXgCIAUAAQAUAAgBgSQAAgKgEgEQgFgDgJAAIgVAAg");
	this.shape_1.setTransform(36.15,-0.075);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AgfAjQgMgNAAgWQAAgVAMgNQAMgNATAAQAUAAAMANQAMAOAAAUQAAAWgMANQgMANgUAAQgTAAgMgNgAgYgcQgJALAAARQAAASAJALQAJALAPAAQAQAAAJgLQAJgLAAgSQAAgRgJgLQgJgLgQAAQgPAAgJALg");
	this.shape_2.setTransform(24.426,-0.0759);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AAlAuIAAhMIgiBMIgFAAIgihNIAABNIgJAAIAAhbIALAAIAiBPIAjhPIALAAIAABbg");
	this.shape_3.setTransform(11.375,-0.075);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AAbAuIg2hOIAABOIgJAAIAAhbIAKAAIA2BOIAAhOIAJAAIAABbg");
	this.shape_4.setTransform(-7.425,-0.075);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AAYAuIgMggQgCgFgCgCQgEgDgGAAIgVAAIAAAqIgKAAIAAhbIAdAAQAOAAAIAFQAIAGAAANQABAKgGAFQgEAGgJABQAFABADADIACADIADAFIANAhgAgXgCIAUAAQAUAAAAgSQgBgKgEgEQgFgDgJAAIgVAAg");
	this.shape_5.setTransform(-18.4,-0.075);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AAeAuIgJgZIgpAAIgJAZIgKAAIAjhbIAJAAIAjBbgAASAOIgSgyIgRAyIAjAAg");
	this.shape_6.setTransform(-29.425,-0.075);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AgbAuIAAhbIA1AAIAAAIIgrAAIAAAhIAoAAIAAAHIgoAAIAAAjIAtAAIAAAIg");
	this.shape_7.setTransform(-39.275,-0.075);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#363636").s().p("AgZAuIAAhbIAJAAIAABTIAqAAIAAAIg");
	this.shape_8.setTransform(-48.325,-0.075);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AszCwQgUAAAAgUIAAk3QAAgUAUAAIZnAAQAUAAAAAUIAAE3QAAAUgUAAg");
	this.shape_9.setTransform(0,0.025);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.button_base_Layer_1, null, null);


(liba.Yellowbox = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.Yellow_box_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(0,-99.2,1,1,0,0,0,0,-99.2);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.Yellowbox, new cjs.Rectangle(-150,-137.6,300,76.69999999999999), null);


(liba.textend = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.text_end_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(-1.1,-180.8,1,1,0,0,0,-1.1,-180.8);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.textend, new cjs.Rectangle(-148.9,-198.3,297.8,29), null);


(liba.shadow = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.shadow_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.shadow, new cjs.Rectangle(-75.5,-6,151,12), null);


(liba.Scene_1_Yellow_box = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Yellow_box
	this.instance = new liba.Yellowbox();
	this.instance.parent = this;
	this.instance.setTransform(150,313.15);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(195));

}).prototype = pa = new cjs.MovieClip();


(liba.Scene_1_inviso = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// inviso
	this.button_1 = new liba.invisbtn();
	this.button_1.name = "button_1";
	this.button_1.parent = this;
	this.button_1.setTransform(150,125,1,0.4167);
	new cjs.ButtonHelper(this.button_1, 0, 1, 2, false, new liba.invisbtn(), 3);

	this.timeline.addTween(cjs.Tween.get(this.button_1).wait(195));

}).prototype = pa = new cjs.MovieClip();


(liba.Scene_1_Image_Blur = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Image_Blur
	this.instance = new liba.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-1007,125.2,1,0.7587);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:1284},9).to({_off:true},1).wait(39).to({_off:false,x:-1007},0).to({x:1284},9).to({_off:true},1).wait(44).to({_off:false,x:-1007},0).to({x:1284},9).to({_off:true},1).wait(82));

}).prototype = pa = new cjs.MovieClip();


(liba.logofastlane = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.logo_fast_lane_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.logofastlane, new cjs.Rectangle(-64.1,-21.5,128.2,42.9), null);


(liba.hertzlogo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.hertz_logo_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.hertzlogo, new cjs.Rectangle(-58.5,-20.4,117,40.9), null);


(liba.copy2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.copy_2_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(1.4,-286.7,1,1,0,0,0,1.4,-286.7);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.copy2, new cjs.Rectangle(-34.9,-304.9,74.4,33.5), null);


(liba.copy1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.copy_1_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(-1.8,-188.2,1,1,0,0,0,-1.8,-188.2);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.copy1, new cjs.Rectangle(-151.9,-208.4,300,33.5), null);


(liba.buttonbase = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.button_base_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.buttonbase, new cjs.Rectangle(-84,-17.5,168,35.1), null);


(liba.button_bouncing_shadow = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// shadow
	this.instance = new liba.shadow();
	this.instance.parent = this;
	this.instance.setTransform(0.5,26.45);
	this.instance.alpha = 0.4219;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:0.73},25).to({scaleX:1},26).wait(1));

}).prototype = pa = new cjs.MovieClip();


(liba.button_bouncing_button_base = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button_base
	this.instance = new liba.buttonbase();
	this.instance.parent = this;
	this.instance.setTransform(0,-14.85);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:-21.35},25).to({y:-14.85},26).wait(1));

}).prototype = pa = new cjs.MovieClip();


(liba.Scene_1_Hertz_Logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Hertz_Logo
	this.text = new cjs.Text("*When using CLEAR at participating locations only. Actual times may vary.", "7px 'Arial'", "#363636");
	this.text.textAlign = "center";
	this.text.lineHeight = 10;
	this.text.parent = this;
	this.text.setTransform(118.5,237.85);

	this.instance = new liba.hertzlogo();
	this.instance.parent = this;
	this.instance.setTransform(270.3,236.55,0.43,0.43,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance},{t:this.text}]}).to({state:[]},113).wait(82));

}).prototype = pa = new cjs.MovieClip();


(liba.Scene_1_copy_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// copy_2
	this.instance = new liba.copy2();
	this.instance.parent = this;
	this.instance.setTransform(-53.25,504.95);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(58).to({_off:false},0).to({x:151.2},4,cjs.Ease.sineOut).to({_off:true},51).wait(82));

}).prototype = pa = new cjs.MovieClip();


(liba.Scene_1_copy_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// copy_1
	this.instance = new liba.copy1();
	this.instance.parent = this;
	this.instance.setTransform(151.2,460.05);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(8).to({_off:false},0).to({y:386.55,alpha:1},5,cjs.Ease.get(0.7)).to({_off:true},100).wait(82));

}).prototype = pa = new cjs.MovieClip();


(liba.buttonbouncing = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_51 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(51).call(this.frame_51).wait(1));

	// button_base_obj_
	this.button_base = new liba.button_bouncing_button_base();
	this.button_base.name = "button_base";
	this.button_base.parent = this;
	this.button_base.setTransform(0,-14.8,1,1,0,0,0,0,-14.8);
	this.button_base.depth = 0;
	this.button_base.isAttachedToCamera = 0
	this.button_base.isAttachedToMask = 0
	this.button_base.layerDepth = 0
	this.button_base.layerIndex = 0
	this.button_base.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.button_base).wait(52));

	// shadow_obj_
	this.shadow = new liba.button_bouncing_shadow();
	this.shadow.name = "shadow";
	this.shadow.parent = this;
	this.shadow.setTransform(0.5,26.4,1,1,0,0,0,0.5,26.4);
	this.shadow.depth = 0;
	this.shadow.isAttachedToCamera = 0
	this.shadow.isAttachedToMask = 0
	this.shadow.layerDepth = 0
	this.shadow.layerIndex = 1
	this.shadow.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.shadow).wait(52));

}).prototype = pa = new cjs.MovieClip();
pa.nominalBounds = new cjs.Rectangle(-84,-38.9,168,71.4);


(liba.end_block_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new liba.logofastlane();
	this.instance.parent = this;
	this.instance.setTransform(-27.15,-239.1,0.54,0.54,0,0,0,3.2,-4.7);

	this.instance_1 = new liba.hertzlogo();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-100.65,-242.8,0.54,0.54,0,0,0,-4.8,-4);

	this.instance_2 = new liba.textend();
	this.instance_2.parent = this;
	this.instance_2.setTransform(0.15,-89.95);

	this.instance_3 = new liba.buttonbouncing();
	this.instance_3.parent = this;
	this.instance_3.setTransform(76.05,-228.75,0.65,0.65,0,0,0,0.1,-0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_3},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.end_block_Layer_1, null, null);


(liba.endblock = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new liba.end_block_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(0.5,-184.3,1,1,0,0,0,0.5,-184.3);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototypeSmall(liba.endblock, new cjs.Rectangle(-148.8,-288.3,297.9,80.70000000000002), null);


(liba.Scene_1_lockup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// lockup
	this.instance = new liba.endblock();
	this.instance.parent = this;
	this.instance.setTransform(149.9,562.55);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(113).to({_off:false},0).to({y:464.45},7,cjs.Ease.quartOut).wait(75));

}).prototype = pa = new cjs.MovieClip();


// stage content:
(liba.Hertz_Marvel_LearnMore_GDNHTML5_300x250_02062019 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	this.___GetDepth___ = function(obj) {
		var depth = obj.depth;
		var cameraObj = this.___camera___instance;
		if(cameraObj && cameraObj.depth && obj.isAttachedToCamera)
		{
			depth += depth + cameraObj.depth;
		}
		return depth;
		}
	this.___needSorting___ = function() {
		for (var i = 0; i < this.getNumChildren() - 1; i++)
		{
			var prevDepth = this.___GetDepth___(this.getChildAt(i));
			var nextDepth = this.___GetDepth___(this.getChildAt(i + 1));
			if (prevDepth < nextDepth)
				return true;
		}
		return false;
	}
	this.___sortFunction___ = function(obj1, obj2) {
		return (this.exportRoot.___GetDepth___(obj2) - this.exportRoot.___GetDepth___(obj1));
	}
	this.on('tick', function (event){
		var curTimeline = event.currentTarget;
		if (curTimeline.___needSorting___()){
			this.sortChildren(curTimeline.___sortFunction___);
		}
	});

	// timeline functions:
	this.frame_0 = function() {
		this.button_1 = this.inviso.button_1;
		//initiate variable
		if(!this.loopsPlayed) {
			this.loopsPlayed = 0;
		}
		
		//sets button
		this.button_1.addEventListener("click", fl_ClickToGoToWebPage);
		
		//activates clicktag when called
		function fl_ClickToGoToWebPage() {
			window.open(clickTag, '_blank');
		}
	}
	this.frame_156 = function() {
		//add to loop count
		this.loopsPlayed++; console.log(this.loopsPlayed);
		
		
		//determines if loop is reached changed number to change loops
		if (this.loopsPlayed >= 2) {
			this.stop();	
		} else {
			this.play();
		}
	}
	this.frame_194 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(156).call(this.frame_156).wait(38).call(this.frame_194).wait(1));

	// inviso_obj_
	this.inviso = new liba.Scene_1_inviso();
	this.inviso.name = "inviso";
	this.inviso.parent = this;
	this.inviso.setTransform(150,125,1,1,0,0,0,150,125);
	this.inviso.depth = 0;
	this.inviso.isAttachedToCamera = 0
	this.inviso.isAttachedToMask = 0
	this.inviso.layerDepth = 0
	this.inviso.layerIndex = 0
	this.inviso.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.inviso).wait(195));

	// Hertz_Logo_obj_
	this.Hertz_Logo = new liba.Scene_1_Hertz_Logo();
	this.Hertz_Logo.name = "Hertz_Logo";
	this.Hertz_Logo.parent = this;
	this.Hertz_Logo.setTransform(148.7,240.5,1,1,0,0,0,148.7,240.5);
	this.Hertz_Logo.depth = 0;
	this.Hertz_Logo.isAttachedToCamera = 0
	this.Hertz_Logo.isAttachedToMask = 0
	this.Hertz_Logo.layerDepth = 0
	this.Hertz_Logo.layerIndex = 1
	this.Hertz_Logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Hertz_Logo).wait(195));

	// lockup_obj_
	this.lockup = new liba.Scene_1_lockup();
	this.lockup.name = "lockup";
	this.lockup.parent = this;
	this.lockup.depth = 0;
	this.lockup.isAttachedToCamera = 0
	this.lockup.isAttachedToMask = 0
	this.lockup.layerDepth = 0
	this.lockup.layerIndex = 2
	this.lockup.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.lockup).wait(195));

	// copy_2_obj_
	this.copy_2 = new liba.Scene_1_copy_2();
	this.copy_2.name = "copy_2";
	this.copy_2.parent = this;
	this.copy_2.depth = 0;
	this.copy_2.isAttachedToCamera = 0
	this.copy_2.isAttachedToMask = 0
	this.copy_2.layerDepth = 0
	this.copy_2.layerIndex = 3
	this.copy_2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.copy_2).wait(195));

	// copy_1_obj_
	this.copy_1 = new liba.Scene_1_copy_1();
	this.copy_1.name = "copy_1";
	this.copy_1.parent = this;
	this.copy_1.depth = 0;
	this.copy_1.isAttachedToCamera = 0
	this.copy_1.isAttachedToMask = 0
	this.copy_1.layerDepth = 0
	this.copy_1.layerIndex = 4
	this.copy_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.copy_1).wait(195));

	// Yellow_box_obj_
	this.Yellow_box = new liba.Scene_1_Yellow_box();
	this.Yellow_box.name = "Yellow_box";
	this.Yellow_box.parent = this;
	this.Yellow_box.setTransform(150,244.3,1,1,0,0,0,150,244.3);
	this.Yellow_box.depth = 0;
	this.Yellow_box.isAttachedToCamera = 0
	this.Yellow_box.isAttachedToMask = 0
	this.Yellow_box.layerDepth = 0
	this.Yellow_box.layerIndex = 5
	this.Yellow_box.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Yellow_box).wait(195));

	// Image_Blur_obj_
	this.Image_Blur = new liba.Scene_1_Image_Blur();
	this.Image_Blur.name = "Image_Blur";
	this.Image_Blur.parent = this;
	this.Image_Blur.setTransform(-995.5,125,1,1,0,0,0,-995.5,125);
	this.Image_Blur.depth = 0;
	this.Image_Blur.isAttachedToCamera = 0
	this.Image_Blur.isAttachedToMask = 0
	this.Image_Blur.layerDepth = 0
	this.Image_Blur.layerIndex = 6
	this.Image_Blur.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Image_Blur).wait(195));

	// images_obj_
	this.images = new liba.Scene_1_images();
	this.images.name = "images";
	this.images.parent = this;
	this.images.depth = 0;
	this.images.isAttachedToCamera = 0
	this.images.isAttachedToMask = 0
	this.images.layerDepth = 0
	this.images.layerIndex = 7
	this.images.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.images).wait(195));

}).prototype = pa = new cjs.MovieClip();
pa.nominalBounds = new cjs.Rectangle(-2141,25,4732,329.9);
// library properties:
liba.properties = {
	id: '18A945673E934188A56411646C4FB36A',
	width: 300,
	height: 250,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"/images/300x250/index_atlas_P_.png?1549578299799", id:"index_atlas_P_"},
		{src:"/images/300x250/index_atlas_NP_.jpg?1549578299799", id:"index_atlas_NP_"}
	],
	preloads: []
};



// bootstrap callback support:

(liba.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = pa = new createjs.Stage();

pa.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
pa.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
pa.stopa = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
pa.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(liba.properties.fps * ms / 1000); }
pa.getDuration = function() { return this.getChildAt(0).totalFrames / liba.properties.fps * 1000; }

pa.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / liba.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['18A945673E934188A56411646C4FB36A'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return liba; },
	getSpriteSheet: function() { return ssa; },
	getImages: function() { return imga; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


// Layer depth API : 

AdobeAnDup.Layer = new function() {
	this.getLayerZDepth = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth; else 0;";
		return eval(script);
	}
	this.setLayerZDepth = function(timeline, layerName, zDepth)
	{
		const MAX_zDepth = 10000;
		const MIN_zDepth = -5000;
		if(zDepth > MAX_zDepth)
			zDepth = MAX_zDepth;
		else if(zDepth < MIN_zDepth)
			zDepth = MIN_zDepth;
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth = " + zDepth + ";";
		eval(script);
	}
	this.removeLayer = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline.removeChild(timeline." + layerName + ");";
		eval(script);
	}
	this.addNewLayer = function(timeline, layerName, zDepth)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		zDepth = typeof zDepth !== 'undefined' ? zDepth : 0;
		var layer = new createjs.MovieClip();
		layer.name = layerName;
		layer.depth = zDepth;
		layer.layerIndex = 0;
		timeline.addChild(layer);
	}
}


})(createjs = createjs||{}, AdobeAnDup = AdobeAnDup||{});
var createjs, AdobeAnDup;