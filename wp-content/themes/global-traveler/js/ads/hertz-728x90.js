(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"index_atlas_P_", frames: [[0,0,151,12]]},
		{name:"index_atlas_NP_", frames: [[0,0,866,329],[452,331,396,135],[452,468,396,135],[0,331,450,488]]}
];


// symbols:



(lib.Bitmap2 = function() {
	this.initialize(ss["index_atlas_P_"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.blurtile = function() {
	this.initialize(ss["index_atlas_NP_"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.carlandscape = function() {
	this.initialize(ss["index_atlas_NP_"]);
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.lady = function() {
	this.initialize(ss["index_atlas_NP_"]);
	this.gotoAndStop(2);
}).prototype = p = new cjs.Sprite();



(lib.lady2 = function() {
	this.initialize(ss["index_atlas_NP_"]);
	this.gotoAndStop(3);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Yellow_box_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFCC00").s().p("EgkRAHCIAAuDMBIjAAAIAAODg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Yellow_box_Layer_1, null, null);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.blurtile();
	this.instance.parent = this;
	this.instance.setTransform(441,-165);

	this.instance_1 = new lib.blurtile();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-421,-165);

	this.instance_2 = new lib.blurtile();
	this.instance_2.parent = this;
	this.instance_2.setTransform(-1284,-164.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1284,-165,2591,329.5);


(lib.text_end_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AgIAKIAAgTIARAAIAAATg");
	this.shape.setTransform(136.75,-180.775);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_1.setTransform(130.275,-186.375);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AgGBHIAAhjIANAAIAABjgAgGg5IAAgNIANAAIAAANg");
	this.shape_2.setTransform(124.425,-186.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AgiAlQgNgOAAgXQAAgWANgPQANgOAVAAQAMAAAJAFQAJAGAEAJIAAgSIAOAAIAABjIgOAAIAAgTQgKAVgYAAQgVAAgNgPgAgXgdQgKALAAASQAAASAKAMQAJALAPAAQAQAAAJgLQAIgMAAgSQAAgSgIgLQgJgLgQAAQgPAAgJALg");
	this.shape_3.setTransform(115.375,-184.825);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AAdAyIgbhUIgdBUIgPAAIgfhjIAOAAIAaBTIAchTIAOAAIAcBTIAXhTIAOAAIgeBjg");
	this.shape_4.setTransform(101.9,-184.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AgfAmQgOgOgBgXQAAgXAOgPQANgOAWAAQAUAAAMANQAMANAAAWIAAAFIhOAAQAAASAKALQALAKAQAAQASAAAPgLIAEAKQgPAMgXAAQgWAAgOgOgAAigHQgBgQgIgIQgJgJgNAAQgNAAgKAJQgJAJgBAPIBAAAIAAAAg");
	this.shape_5.setTransform(82.7,-184.825);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AAeBJIAAg+QgBgOgFgHQgGgHgNAAQgMAAgLAJQgLAIAAAMIAAA9IgNAAIAAiRIANAAIAABAQAFgKAKgFQAKgFALAAQAQAAAKAKQAKAKAAASIAAA/g");
	this.shape_6.setTransform(71.1,-187.125);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_7.setTransform(61.125,-186.375);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_8.setTransform(48.075,-186.375);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#363636").s().p("AgqAJIAAg7IANAAIAAA8QAAAeAaAAQAPAAAIgKQAJgIAAgKIAAg+IAOAAIABBjIgOAAIgBgSQgLAUgWAAQgmAAAAgqg");
	this.shape_9.setTransform(38.45,-184.675);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#363636").s().p("AgkAmQgOgOAAgYQAAgWAOgPQAOgOAWAAQAYAAAOAOQANAPAAAWQAAAYgOAOQgNAOgYAAQgXAAgNgOgAgagdQgKALAAASQAAATAKALQAKALAQAAQASAAAJgLQAKgLAAgTQAAgSgKgLQgJgLgSAAQgQAAgKALg");
	this.shape_10.setTransform(26.325,-184.825);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#363636").s().p("AAdBJIAAg+QAAgOgFgHQgFgHgOAAQgMAAgLAJQgLAIAAAMIAAA9IgOAAIAAiRIAOAAIAABAQAFgKAKgFQAJgFAMAAQAQAAAKAKQALAKAAASIAAA/g");
	this.shape_11.setTransform(14.25,-187.125);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_12.setTransform(4.275,-186.375);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#363636").s().p("AgGBHIAAhjIANAAIAABjgAgGg5IAAgNIANAAIAAANg");
	this.shape_13.setTransform(-1.575,-186.9);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#363636").s().p("AAdAyIgbhUIgeBUIgOAAIgfhjIAPAAIAZBTIAchTIAOAAIAcBTIAXhTIAOAAIgeBjg");
	this.shape_14.setTransform(-11.8,-184.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#363636").s().p("AggAmQgOgOABgXQAAgXANgPQAOgOAUAAQAVAAAMANQALANAAAWIAAAFIhNAAQAAASAKALQAKAKARAAQASAAAOgLIAFAKQgPAMgXAAQgXAAgOgOgAAjgHQgBgQgJgIQgIgJgOAAQgNAAgJAJQgKAJgBAPIBBAAIAAAAg");
	this.shape_15.setTransform(-31,-184.825);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_16.setTransform(-40.425,-186.375);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#363636").s().p("AgiAlQgNgOAAgXQAAgWANgPQANgOAVAAQAMAAAJAFQAJAGAEAJIAAgSIAOAAIAABjIgOAAIAAgTQgKAVgYAAQgVAAgNgPgAgXgdQgKALAAASQAAASAKAMQAJALAPAAQAQAAAJgLQAIgMAAgSQAAgSgIgLQgJgLgQAAQgPAAgJALg");
	this.shape_17.setTransform(-50.425,-184.825);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#363636").s().p("AglBBIACgMQAQAIARAAQAkAAAAgpIAAgLQgKAVgZAAQgVAAgMgNQgNgOAAgWQAAgYANgOQAMgOAWAAQALAAAJAFQAJAGAFAJIABgSIANAAIAABXQAAAagOAOQgNAOgXAAQgTAAgQgHgAgYgxQgJALAAATQAAASAJAKQAJAKAPAAQAPAAAKgLQAJgKAAgSQAAgSgJgLQgJgLgQAAQgOAAgKALg");
	this.shape_18.setTransform(-62.725,-182.825);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#363636").s().p("AAaBCIgDAAQgUgBgHgIQgCgCgBgEQgCgHAAgLIAAg5IgTAAIAAgJIATAAIAAgcIANgEIAAAgIAZAAIAAAJIgZAAIAABBQABAHADADQAGAEAPAAIAAALIgDAAg");
	this.shape_19.setTransform(-78.125,-186.375);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#363636").s().p("AgGBHIAAhjIANAAIAABjgAgGg5IAAgNIANAAIAAANg");
	this.shape_20.setTransform(-83.975,-186.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#363636").s().p("AAhAyIghgpIggApIgPAAIApgyIgmgxIAPAAIAdAoIAggoIAPAAIgnAxIAoAyg");
	this.shape_21.setTransform(-91.725,-184.825);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#363636").s().p("AggAmQgOgOABgXQAAgXANgPQAOgOAUAAQAVAAAMANQALANAAAWIAAAFIhNAAQAAASAKALQAKAKARAAQASAAAOgLIAFAKQgPAMgXAAQgXAAgOgOgAAjgHQgBgQgJgIQgIgJgOAAQgNAAgJAJQgKAJgCAPIBCAAIAAAAg");
	this.shape_22.setTransform(-102.65,-184.825);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#363636").s().p("AggAmQgOgOABgXQAAgXANgPQAOgOAUAAQAVAAAMANQALANAAAWIAAAFIhNAAQAAASAKALQAKAKARAAQASAAAOgLIAFAKQgPAMgXAAQgXAAgOgOgAAjgHQgBgQgJgIQgIgJgOAAQgNAAgJAJQgKAJgBAPIBBAAIAAAAg");
	this.shape_23.setTransform(-119.65,-184.825);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#363636").s().p("AAdBJIAAg+QABgOgGgHQgFgHgNAAQgNAAgLAJQgLAIAAAMIAAA9IgOAAIAAiRIAOAAIAABAQAFgKAKgFQAKgFALAAQAQAAAKAKQAKAKAAASIAAA/g");
	this.shape_24.setTransform(-131.25,-187.125);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#363636").s().p("AgGBHIAAiBIgvAAIAAgMIBrAAIAAAMIgvAAIAACBg");
	this.shape_25.setTransform(-142.825,-186.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.text_end_Layer_1, null, null);


(lib.shadow_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Bitmap2();
	this.instance.parent = this;
	this.instance.setTransform(-75.5,-6);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.shadow_Layer_1, null, null);


(lib.Scene_1_images = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// images
	this.instance = new lib.lady();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.68,0.68);

	this.instance_1 = new lib.lady2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(0,-85,0.59,0.59);

	this.instance_2 = new lib.carlandscape();
	this.instance_2.parent = this;
	this.instance_2.setTransform(0,0,0.67,0.67);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},10).to({state:[]},39).to({state:[{t:this.instance_1}]},10).to({state:[]},44).to({state:[{t:this.instance_2}]},10).wait(82));

}).prototype = p = new cjs.MovieClip();


(lib.logo_fast_lane_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#232021").s().p("AhwCIIA5kPICoAAIgIApIh6AAIgPBIIBzAAIgJAoIhyAAIgQBNIB+AAIgIApg");
	this.shape.setTransform(57.1629,-12.8928,0.6095,0.6095);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#232021").s().p("AAlCIIhejHIgqDHIgrAAIA4kPIAyAAIBdDHIAqjGIAsAAIg5EOg");
	this.shape_1.setTransform(41.0722,-12.9081,0.6095,0.6095);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#232021").s().p("ABPCIIgMhCIhrAAIgnBCIg0AAICjkPIAwAAIA0EPgAgOAaIBHAAIgNhqg");
	this.shape_2.setTransform(22.4825,-12.9081,0.6095,0.6095);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#232021").s().p("AhYCHIA4kOIAuAAIgwDmIB8ABIgJAog");
	this.shape_3.setTransform(8.1746,-12.9081,0.6095,0.6095);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#232021").s().p("AhNCIIAxjnIhUAAIAJgoIDXAAIgIAoIhVAAIgwDng");
	this.shape_4.setTransform(-11.1465,-12.9081,0.6095,0.6095);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#232021").s().p("Ag3CKQgNgBgMgFQgYgIgMgOIAbgiQALAKATAHQAVAHAPAAQAZAAAOgJQAOgJAEgUIABgGIAAgGIgBgFIgCgEQgDgGgHgDQgGgFgNgEIgigNQgggMgKgRQgMgRAGgeQAFgYAQgRQASgRAVgIQAXgIAaAAQAjAAAUAHQAJAEAIAGQALAJAEAGIgeAfQgTgWgoAAQgWAAgPAIQgPAHgEAQIgBANQABAGACAEQADADAHAFIASAJIAHADIAgALQANAFAMAJQALAHAEAIQAKASgHAeQgFAVgKAPQgLAPgQAJQgSAKgQADQgQAFgUAAQgNAAgOgDg");
	this.shape_5.setTransform(-26.5972,-12.9233,0.6095,0.6095);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#232021").s().p("ABQCIIgMhCIhtAAIgoBCIg0AAICmkPIAwAAIA1EPgAgOAaIBIAAIgNhqg");
	this.shape_6.setTransform(-43.2822,-12.9081,0.6095,0.6095);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#232021").s().p("AhvCIIA6kPIClAAIgJAoIh1AAIgQBLIBvAAIgJAoIhvAAIgYB0g");
	this.shape_7.setTransform(-54.4055,-12.9081,0.6095,0.6095);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#1A4094").s().p("AgDAfIAAgbIgWgiIAJAAIAQAcIASgcIAIAAIgWAiIAAAbg");
	this.shape_8.setTransform(-23.1231,12.0813,0.6095,0.6095);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#1A4094").s().p("AgUAfIAAg9IAUAAQASABAAAPQABAKgLADQANACAAAMQAAAIgFAEQgGAGgJAAgAgMAYIAMAAQAOAAAAgLQAAgLgOAAIgMAAgAgMgDIALAAQAMAAAAgLQAAgJgLAAIgMAAg");
	this.shape_9.setTransform(-27.3591,12.0813,0.6095,0.6095);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#1A4094").s().p("AgXAfIAAg9IAUAAQAMAAAIAJQAHAIAAANQAAAOgHAJQgIAIgMAAgAgQAYIAMAAQAUABAAgZQAAgYgUABIgMAAg");
	this.shape_10.setTransform(-34.475,12.0813,0.6095,0.6095);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#1A4094").s().p("AgRAfIAAg9IAiAAIAAAHIgbAAIAAAUIAaAAIAAAFIgaAAIAAAWIAcAAIAAAHg");
	this.shape_11.setTransform(-38.97,12.0813,0.6095,0.6095);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#1A4094").s().p("AANAfIgPgbIgMAAIAAAbIgHAAIAAg9IAVAAQAUABAAAQQAAANgOADIAQAcgAgOgCIAOAAQAMAAAAgLQAAgKgNAAIgNAAg");
	this.shape_12.setTransform(-43.2822,12.0813,0.6095,0.6095);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#1A4094").s().p("AgRAfIAAg9IAjAAIAAAHIgbAAIAAAUIAZAAIAAAFIgZAAIAAAWIAbAAIAAAHg");
	this.shape_13.setTransform(-47.6554,12.0813,0.6095,0.6095);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#1A4094").s().p("AANAfIgNgyIAAAAIgNAyIgHAAIgRg9IAHAAIAOAzIAOgzIAGAAIANAzIAOgzIAHAAIgRA9g");
	this.shape_14.setTransform(-52.8208,12.0813,0.6095,0.6095);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#1A4094").s().p("AgTAXQgHgJAAgOQAAgNAHgJQAIgIALgBQAMABAIAIQAHAJAAANQAAAOgHAJQgIAIgMAAQgLAAgIgIgAgNgRQgFAGAAALQAAALAFAHQAFAIAIgBQAJABAFgIQAFgHAAgLQAAgLgFgGQgFgIgJABQgIgBgFAIg");
	this.shape_15.setTransform(-58.3368,12.0813,0.6095,0.6095);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#1A4094").s().p("AgUAfIAAg9IAUAAQAVABAAARQAAARgVAAIgMAAIAAAagAgMAAIALAAQAOAAAAgMQAAgMgOABIgLAAg");
	this.shape_16.setTransform(-62.8928,12.0813,0.6095,0.6095);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#1A4094").s().p("AgIAJQgEgEAAgFQAAgEAEgEQADgEAFAAIAAAAQAGAAADAEQAEAEAAAEQAAAFgEAEQgDAEgGAAQgFAAgDgEg");
	this.shape_17.setTransform(-7.6403,9.0042,0.6093,0.6093);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#1A4094").s().p("AAAANQgEAAgEgEQgEgDAAgGQAAgEAEgEQAEgEAEAAQAGAAADAEQAEAEAAAEQAAAFgEAEQgEAEgFAAg");
	this.shape_18.setTransform(-10.3652,9.7506,0.6093,0.6093);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#1A4094").s().p("AgIAJQgEgDAAgGQAAgEAEgEQAEgEAEAAQAFAAAEAEQAEAEAAAEQAAAGgDADQgEAEgGAAQgEAAgEgEg");
	this.shape_19.setTransform(-10.9593,6.5975,0.6093,0.6093);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#1A4094").s().p("AgKAIQgDgEABgFQABgFAEgDQAEgEAFABQAFABADAEQAEAEgBAFQgBAFgEAEQgEACgEAAQgFAAgFgFg");
	this.shape_20.setTransform(-8.5991,11.9373,0.6093,0.6093);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#1A4094").s().p("AgBANQgFAAgEgFQgDgEABgFQABgFAEgDQAEgEAFABQAFABADAEQAEAFgBAEQgBAFgEAEQgEACgEAAg");
	this.shape_21.setTransform(-10.366,14.1308,0.6093,0.6093);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#1A4094").s().p("AgKAIQgDgEABgFQABgFAEgDQAEgEAFABQAFABADAEQAEAFgBAEQgBAFgEAEQgEACgEAAQgGAAgEgFg");
	this.shape_22.setTransform(-12.6912,11.9373,0.6093,0.6093);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#1A4094").s().p("AgDANQgEgCgEgFQgCgEACgFQABgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgEAJgJAAg");
	this.shape_23.setTransform(-7.641,14.8668,0.6093,0.6093);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgEABgFQACgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgEAJgJAAg");
	this.shape_24.setTransform(-7.7909,17.6696,0.6093,0.6093);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgEABgFQACgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgEAJgJAAg");
	this.shape_25.setTransform(-10.9593,17.2736,0.6093,0.6093);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#1A4094").s().p("AgLAEQgCgEACgFQADgFAFgBQAEgCAFACQAFADABAFQACAEgCAFQgDAFgFABIgEABQgJAAgCgJg");
	this.shape_26.setTransform(-5.1632,16.6848,0.6093,0.6093);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#1A4094").s().p("AgMAEQgBgEACgEQADgFAFgCQAEgCAFACQAFADACAFQABAEgCAFQgDAFgFACIgEAAQgIAAgEgJg");
	this.shape_27.setTransform(-3.6172,19.0306,0.6093,0.6093);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#1A4094").s().p("AgFAMQgFgDgBgEQgCgFACgEQADgFAFgCQAEgCAFADQAFACACAFQABAEgCAFQgDAFgFACIgEAAg");
	this.shape_28.setTransform(-6.4299,20.5638,0.6093,0.6093);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#1A4094").s().p("AgHALQgEgEgBgFQgBgEADgFQAEgEAFgBQAEgBAFADQAEAEABAFQABAEgDAFQgEAEgFABIgCAAQgDAAgEgCg");
	this.shape_29.setTransform(-2.0787,16.689,0.6093,0.6093);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#1A4094").s().p("AgGALQgFgEgBgFQgBgEADgFQADgEAGgBQAEgBAEADQAFADABAGQABAEgDAFQgFAFgGAAQgDAAgDgCg");
	this.shape_30.setTransform(0.5565,17.6944,0.6093,0.6093);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#1A4094").s().p("AgGALQgFgDgBgFQgBgFADgEQADgEAGgCQAEAAAEADQAGADAAAFQABAFgDAEQgEAFgHAAQgEAAgCgCg");
	this.shape_31.setTransform(-0.8144,20.5635,0.6093,0.6093);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#1A4094").s().p("AAAANQgFAAgDgEQgEgEAAgFQAAgEAEgEQAEgEAEAAQAFAAAEADQADADABAGQAAAFgEAEQgEAEgFAAg");
	this.shape_32.setTransform(0.4194,14.8687,0.6093,0.6093);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#1A4094").s().p("AgIAKQgEgEAAgGQAAgEAEgEQADgEAFAAIAAAAQAGAAADAEQAEADAAAFQAAAFgEAEQgEAEgFAAQgEAAgEgDg");
	this.shape_33.setTransform(3.1443,14.1376,0.6093,0.6093);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#1A4094").s().p("AgIAJQgEgEAAgFQAAgFADgDQAEgEAFAAQAFAAAEADQAEAEAAAFQAAAFgEAEQgEAEgFAAQgFAAgDgEg");
	this.shape_34.setTransform(3.7248,17.2755,0.6093,0.6093);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#1A4094").s().p("AgBANQgFAAgDgFQgEgEABgFQABgFAEgDQAFgEAEABQAFABAEAEQADAFgBAEQgBAFgEAEQgEACgEAAg");
	this.shape_35.setTransform(1.3744,11.9373,0.6093,0.6093);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#1A4094").s().p("AgBANQgFAAgDgFQgEgEABgFQABgFAEgDQAFgDAEAAQAFABADAEQAEAFgBAEQAAAGgFADQgEACgEAAg");
	this.shape_36.setTransform(3.146,9.7484,0.6093,0.6093);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#1A4094").s().p("AgJAIQgEgEABgFQABgFAEgDQAFgDAEAAQAFABADAEQAEAFgBAEQAAAFgFAEQgEACgEAAQgGAAgDgFg");
	this.shape_37.setTransform(5.4613,11.9419,0.6093,0.6093);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgFACgEQABgFAFgCQAFgDAEACQAFABADAFQACAFgBAEQgDAGgEACIgGABg");
	this.shape_38.setTransform(0.4247,9.0176,0.6093,0.6093);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgEABgEQACgFAFgDQAFgDAEACQAFACADAEQACAFgBAEQgDAJgKAAg");
	this.shape_39.setTransform(0.5565,6.1843,0.6093,0.6093);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#1A4094").s().p("AgDANQgFgCgDgFQgCgFABgEQACgFAFgCQAEgDAFACQAGABACAFQACAEgBAFQgCAGgFACQgCABgEAAg");
	this.shape_40.setTransform(3.7248,6.6108,0.6093,0.6093);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#1A4094").s().p("AgFAMQgFgCgBgFQgCgFACgEQACgEAGgDQAEgCAFADQAFACACAFQABAEgCAFQgDAFgFACIgEAAg");
	this.shape_41.setTransform(-2.0659,7.1897,0.6093,0.6093);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#1A4094").s().p("AgFAMQgEgCgDgGQgBgEACgFQADgFAFgBQAEgCAFACQAFADABAFQACAEgCAFQgDAFgFACIgEAAQgCAAgDgBg");
	this.shape_42.setTransform(-3.6073,4.8339,0.6093,0.6093);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#1A4094").s().p("AgFAMQgEgCgDgGQgBgEACgFQADgFAFgBQAEgCAFACQAFADABAFQACAEgCAFQgDAFgFABIgEABQgCAAgDgBg");
	this.shape_43.setTransform(-0.812,3.3107,0.6093,0.6093);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#1A4094").s().p("AgGALQgFgDgBgGQgBgEADgEQADgFAGgBQAEAAAFADQAEADABAFQABAEgDAFQgEAFgHAAQgEAAgCgCg");
	this.shape_44.setTransform(-5.1459,7.1894,0.6093,0.6093);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#1A4094").s().p("AAAANQgDAAgEgCQgEgDgBgFQgBgFADgEQADgEAGgCQAEgBAEAEQAFADABAFQABAFgDAEQgEAFgFAAg");
	this.shape_45.setTransform(-7.7757,6.1795,0.6093,0.6093);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#1A4094").s().p("AgGALQgFgEgBgFQgBgEADgFQADgEAGgBQAEgBAEADQAGADAAAGQABAEgDAFQgEAEgFABIgCAAQgDAAgDgCg");
	this.shape_46.setTransform(-6.42,3.3149,0.6093,0.6093);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#1A4094").s().p("AAXA/IgVgoIgbAAIAAAoIgYAAIAAh9IAyAAQAVAAANAMQAMAMAAATQAAAYgWAMIAZAugAgZABIAZAAQALAAAGgGQAGgGAAgIQAAgVgXAAIgZAAg");
	this.shape_47.setTransform(53.1694,11.9441,0.6093,0.6093);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#1A4094").s().p("AAjA/IgJgXIgzAAIgJAXIgZAAIAwh9IAXAAIAwB9gAASASIgSgxIgRAxIAjAAg");
	this.shape_48.setTransform(43.7101,11.9441,0.6093,0.6093);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#1A4094").s().p("AgqA/IAAh9IBVAAIAAAXIg8AAIAAAcIA8AAIAAAWIg8AAIAAAdIA8AAIAAAXg");
	this.shape_49.setTransform(34.7381,11.9441,0.6093,0.6093);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#1A4094").s().p("AgoA/IAAh9IAYAAIAABlIA6AAIAAAYg");
	this.shape_50.setTransform(26.6954,11.9441,0.6093,0.6093);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#1A4094").s().p("AgqAuQgTgTAAgbQABgaASgTQATgTAaAAQASAAAPAJQAPAIAIAPIgVANQgKgVgZAAQgQAAgLAMQgLAMAAAQQAAARALAMQALAMAQAAQAaAAAKgYIAXAMQgJARgPAJQgPAKgUAAQgbAAgSgTg");
	this.shape_51.setTransform(17.6185,11.8632,0.6092,0.6092);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#1A4094").s().p("AgIAJQgEgDABgGQgBgEAEgEQAEgEAEAAQAFAAAEAEQADAEAAAEQAAAGgDADQgEAEgFgBQgEABgEgEgAgHgHQgDADAAAEQAAAFADADQADADAEAAQAEAAAEgDQADgDAAgFQAAgEgDgDQgEgDgEAAQgEAAgDADg");
	this.shape_52.setTransform(58.1047,8.8671,0.6093,0.6093);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#1A4094").s().p("AADAHIgCgFIgEAAIAAAFIgBAAIAAgNIAEAAQAFAAAAAFQAAAAAAABQgBAAAAAAQAAABgBAAQAAAAgBABIADAFgAgDABIADAAQABAAAAgBQABAAAAAAQABAAAAAAQAAgBAAAAQAAgBAAgBQAAAAgBgBQAAAAgBAAQAAgBgBAAIgDAAg");
	this.shape_53.setTransform(58.083,8.8021,0.6092,0.6092);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.logo_fast_lane_Layer_1, null, null);


(lib.invisbtn = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FF00FF").s().p("EgXbAu4MAAAhdvMAu3AAAMAAABdvg");
	this.shape._off = true;

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(3).to({_off:false},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-150,-300,300,600);


(lib.hertz_logo_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#121314").s().p("AifCrQgmgqgChHQgChAAchBQAbhBAqghQA/gyBIAAQAfAAAdAIQA1APAcAnQAhAsgFBNQgDAmgJAeIkbAAQgNBfBbAAQAgAAAngNQAhgLAQgMIArBJQgjAagxAPQgvAPguAAQhVAAgrgxgAgnhqQgaAXgHAaICuAAQADgRgHgSQgMgkgvgEIgLAAQglAAgeAag");
	this.shape.setTransform(-13.2373,-1.6,0.6097,0.6097);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#121314").s().p("AjWDUIAUheID1jnIjDAAIAUhiIFTAAIgUBeIj3DoIDGAAIgWBhg");
	this.shape_1.setTransform(45.412,-1.6152,0.6097,0.6097);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#121314").s().p("AicDYIA1j3QAKgyARggQARghAdgYQAigeAvgKQAygLA4AOIgVBiQgmgDgVAEQgcAFgSARQgMANgIAYQgHASgIApIgsDOg");
	this.shape_2.setTransform(8.6303,-1.842,0.6097,0.6097);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#121314").s().p("AApEFIAmi1Ii9AAIgoC1IhtAAIBvoJIBuAAIg0DzIC9AAIA0jzIBtAAIhvIJg");
	this.shape_3.setTransform(-40.666,-4.5876,0.6097,0.6097);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#121314").s().p("Ag9D+QgvgSgRghQgPgdAAghQgBgbAJgqIBHlQIBsAAIgUBiIBzAAIgVBiIhzAAIgbCDQgJApgBAMQgDAaALALQAUAWBKgJIgTBbQgcAIgZAAQgfAAgdgLg");
	this.shape_4.setTransform(26.1591,-4.3525,0.6097,0.6097);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AuMAwIAVhgIcEAAIgVBgg");
	this.shape_5.setTransform(-3.1595,17.4685,0.6095,0.6095);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.hertz_logo_Layer_1, null, null);


(lib.copy_2_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AABAGIgLAVIgJgGIAOgSIgUgGIACgJIAVAJIgDgXIAJAAIAAAXIASgJIAEAJIgTAGIAPAUIgJAFg");
	this.shape.setTransform(313.125,-456.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AgJALIAAgVIATAAIAAAVg");
	this.shape_1.setTransform(309.9,-445.575);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AgZA0QgIgDgGgEIAGgMQAQAMARAAQAZAAAAgTQAAgIgEgDQgFgEgNgFIgPgEQgNgEgHgGQgGgHgBgMQAAgPAMgIQAKgHASAAQAUAAAOAJIgEALQgOgHgPAAQgZAAAAAQQAAAIADADQAEADALAEIAEABIALAEQAPAFAGAFQAJAHgBANQABARgMAIQgLAIgQAAQgOAAgMgGg");
	this.shape_2.setTransform(302.05,-450.025);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AgZA0QgIgDgGgEIAGgMQAQAMARAAQAZAAAAgTQAAgIgEgDQgGgEgMgFIgPgEQgOgEgGgGQgHgHAAgMQAAgPAMgIQAKgHASAAQAUAAAOAJIgEALQgOgHgPAAQgZAAAAAQQAAAIADADQAEADAKAEIAFABIALAEQAPAFAGAFQAJAHgBANQABARgMAIQgLAIgQAAQgOAAgMgGg");
	this.shape_3.setTransform(291.8,-450.025);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AgjAqQgPgQAAgZQAAgZAPgRQAOgQAYAAQAWAAANAPQANAPAAAYIAAAFIhVAAQAAAUALAMQALALASAAQAVAAAPgMIAFALQgRAOgYAAQgZAAgQgQgAAmgIQgBgRgKgKQgJgKgPAAQgOAAgLAKQgKAKgCARIBIAAIAAAAg");
	this.shape_4.setTransform(280.325,-450.025);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AgHBQIAAigIAPAAIAACgg");
	this.shape_5.setTransform(271.425,-452.55);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AgbA4IgBhpIAAgEIAQAAIAAATQAJgVAVAAIALABIAAANIgLgBQgOAAgHAKQgJAKAAATIAAA7g");
	this.shape_6.setTransform(258.675,-450.125);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AgoAqQgQgQAAgaQAAgZAQgQQAPgQAZAAQAaAAAPAQQAPAQABAZQAAAagQAQQgPAQgaAAQgZAAgPgQgAgdggQgLANAAATQAAAVALAMQALAMASAAQAUAAAKgMQAKgMAAgVQAAgTgKgNQgKgMgUAAQgSAAgLAMg");
	this.shape_7.setTransform(247.15,-450.025);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.copy_2_Layer_1, null, null);


(lib.copy_1_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#363636").s().p("AgZA0QgIgDgFgEIAEgMQARAMARAAQAZAAAAgTQAAgIgFgDQgEgEgNgFIgOgEQgPgEgGgGQgGgHAAgMQAAgPALgIQAKgHARAAQAVAAAOAJIgEALQgOgHgQAAQgZAAAAAQQAAAIAEADQAEADAKAEIAFABIALAEQAOAFAIAFQAHAHABANQAAARgNAIQgKAIgRAAQgNAAgMgGg");
	this.shape.setTransform(422.7,-354.675);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#363636").s().p("AgmBCQgOgQAAgaQAAgZAOgQQANgQAYAAQAMAAALAHQALAGAEALIAAhIIAQAAIAACgIgPAAIAAgWQgEALgMAHQgKAHgNAAQgXAAgOgQgAgagIQgKALAAAVQAAAUAJANQAKAMARAAQARAAAKgMQALgNAAgVQAAgUgLgLQgKgMgRAAQgRAAgJAMg");
	this.shape_1.setTransform(410.25,-357.075);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#363636").s().p("AAhA5IAAhAQAAgkgbAAQgNAAgLAIQgLAIgCAOIAABGIgPAAIgBhqIAAgEIAPAAIABAUQAFgLALgFQALgHAMAAQAoAAAAAxIAABAg");
	this.shape_2.setTransform(397.275,-354.8);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#363636").s().p("AgoAqQgQgQAAgaQAAgZAQgQQAPgQAZAAQAbAAAOAQQAPAQABAZQAAAagQAQQgPAQgaAAQgZAAgPgQgAgdggQgLANAAATQAAAVALAMQALAMASAAQAUAAAKgMQAKgMAAgVQAAgTgKgNQgKgMgUAAQgSAAgLAMg");
	this.shape_3.setTransform(383.85,-354.675);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#363636").s().p("AgfAqQgPgQAAgZQAAgZAPgRQAQgQAZAAQAWAAANAMIgFALQgMgKgRAAQgTAAgLAMQgLAMAAAVQAAAUALAMQALAMASAAQASAAAOgLIAFALQgOANgYAAQgZAAgPgQg");
	this.shape_4.setTransform(371.7,-354.675);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#363636").s().p("AgjAqQgPgQAAgZQAAgZAPgRQAOgQAYAAQAWAAANAPQANAPAAAYIAAAFIhVAAQAAAUALAMQALALASAAQAVAAAPgMIAFALQgRAOgYAAQgZAAgQgQgAAmgIQgBgRgKgKQgJgKgPAAQgOAAgLAKQgKAKgCARIBIAAIAAAAg");
	this.shape_5.setTransform(359.775,-354.675);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#363636").s().p("AgZA0QgIgDgGgEIAGgMQAQAMARAAQAZAAAAgTQAAgIgEgDQgGgEgMgFIgPgEQgNgEgHgGQgGgHgBgMQAAgPAMgIQALgHAQAAQAVAAAOAJIgEALQgOgHgPAAQgZAAAAAQQgBAIAEADQAEADALAEIAEABIALAEQAOAFAIAFQAHAHABANQgBARgMAIQgKAIgRAAQgNAAgMgGg");
	this.shape_6.setTransform(348.65,-354.675);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#363636").s().p("AglA8QgNgVAAgmQAAgnANgVQAOgVAYAAQAZAAANAVQAMAVAAAnQAAAmgMAVQgNAVgZAAQgZAAgNgVgAgZgxQgJATAAAfQAABCAjAAQAiAAAAhCQAAgggJgSQgIgSgRAAQgRAAgJASg");
	this.shape_7.setTransform(330.525,-357);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#363636").s().p("AgaBOQgKgDgGgEIAEgMQAHADAKADQAJACAJAAQAQABALgJQAKgJAAgOQAAgQgKgJQgLgIgSAAIgLAAIAAgNIAKAAQAlAAAAgeQAAgMgKgIQgKgGgNgBQgZAAgOARIgIgKQAQgUAfAAQAVAAANALQANAKAAATQABANgIALQgIAKgOADQAPACAKALQAJALAAAPQAAAVgPALQgOANgXAAQgMAAgMgDg");
	this.shape_8.setTransform(317.5,-357);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#363636").s().p("AAhA5IAAhAQAAgkgbAAQgNAAgLAIQgLAIgCAOIAABGIgPAAIgBhqIAAgEIAPAAIABAUQAFgLALgFQALgHAMAAQAoAAAAAxIAABAg");
	this.shape_9.setTransform(298.125,-354.8);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#363636").s().p("AgHBOIAAhtIAPAAIAABtgAgGg+IAAgPIAOAAIAAAPg");
	this.shape_10.setTransform(288.675,-356.975);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#363636").s().p("AgjAqQgPgQAAgZQAAgZAPgRQAOgQAYAAQAWAAANAPQANAPAAAYIAAAFIhVAAQAAAUALAMQALALASAAQAVAAAPgMIAFALQgRAOgYAAQgZAAgQgQgAAmgIQgBgRgKgKQgJgKgPAAQgOAAgLAKQgKAKgCARIBIAAIAAAAg");
	this.shape_11.setTransform(273.375,-354.675);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#363636").s().p("AAcBIIgDAAQgWAAgHgJQgCgDgCgFQgCgHAAgMIAAg/IgVAAIAAgKIAVAAIAAgeIAOgEIAAAiIAcAAIAAAKIgcAAIABBIQAAAIAEADQAGAEARAAIAAAMIgEAAg");
	this.shape_12.setTransform(262.975,-356.375);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#363636").s().p("AglApQgOgQgBgZQAAgZAPgQQAPgQAWAAQANAAAKAGQAKAHAEAKIAAgUIAQAAIAABtIgQAAIAAgVQgKAYgbAAQgXAAgOgRgAgaggQgKAMAAAUQAAAUAKAMQALANAQAAQASAAAJgMQAKgNAAgUQAAgUgKgMQgKgMgRAAQgQAAgLAMg");
	this.shape_13.setTransform(251.95,-354.675);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#363636").s().p("AgpBHIACgNQASAJATAAQAnAAAAgsIAAgNQgKAXgcAAQgXAAgOgPQgOgPAAgYQAAgaAOgQQAOgQAYAAQAMAAAKAGQAKAGAFAKIABgTIAPAAIgBBgQAAAcgOAQQgPAQgZAAQgVAAgSgJgAgag2QgKAMAAAVQAAAUAJALQAKALARAAQARAAAKgMQAKgLAAgUQAAgUgKgMQgJgMgSAAQgQAAgKAMg");
	this.shape_14.setTransform(238.425,-352.475);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#363636").s().p("AgjAqQgPgQAAgZQAAgZAPgRQAOgQAYAAQAWAAANAPQANAPAAAYIAAAFIhVAAQAAAUALAMQALALASAAQAVAAAPgMIAFALQgRAOgYAAQgZAAgQgQgAAmgIQgBgRgKgKQgJgKgPAAQgOAAgLAKQgKAKgCARIBIAAIAAAAg");
	this.shape_15.setTransform(219.475,-354.675);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#363636").s().p("AAhBRIAAhFQAAgQgHgHQgFgIgOAAQgPAAgMAKQgMAKABAMIAABEIgQAAIAAigIAQAAIAABFQAFgJAKgGQAMgHAMAAQARAAALALQAMAMAAAUIAABGg");
	this.shape_16.setTransform(206.7,-357.2);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#363636").s().p("AAcBIIgDAAQgWAAgHgJQgCgDgCgFQgCgHAAgMIAAg/IgVAAIAAgKIAVAAIAAgeIAOgEIAAAiIAcAAIAAAKIgcAAIABBIQAAAIAEADQAGAEARAAIAAAMIgEAAg");
	this.shape_17.setTransform(195.725,-356.375);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#363636").s().p("AAcBIIgDAAQgWAAgHgJQgCgDgCgFQgCgHAAgMIAAg/IgVAAIAAgKIAVAAIAAgeIAOgEIAAAiIAcAAIAAAKIgcAAIABBIQAAAIAEADQAGAEARAAIAAAMIgEAAg");
	this.shape_18.setTransform(181.325,-356.375);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#363636").s().p("AgHBOIAAhtIAPAAIAABtgAgGg+IAAgPIAOAAIAAAPg");
	this.shape_19.setTransform(174.875,-356.975);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#363636").s().p("AAkA3IgkguIgkAuIgQAAIAtg3Igqg2IARAAIAgAsIAjgsIAQAAIgqA2IAsA3g");
	this.shape_20.setTransform(166.325,-354.675);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#363636").s().p("AguBOIAAibIBaAAIAAANIhKAAIAAA4IBFAAIAAAMIhFAAIAAA9IBNAAIAAANg");
	this.shape_21.setTransform(154.425,-356.975);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.copy_1_Layer_1, null, null);


(lib.button_base_Layer_1 = function(mode,startPosition,loop) {
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

}).prototype = getMCSymbolPrototype(lib.button_base_Layer_1, null, null);


(lib.Yellowbox = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.Yellow_box_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Yellowbox, new cjs.Rectangle(-232.2,-45,464.4,90), null);


(lib.textend = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.text_end_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(-5.3,-185.1,1,1,0,0,0,-5.3,-185.1);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.textend, new cjs.Rectangle(-152.9,-205.3,297.8,33.5), null);


(lib.shadow = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.shadow_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.shadow, new cjs.Rectangle(-75.5,-6,151,12), null);


(lib.Scene_1_Yellow_box = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Yellow_box
	this.instance = new lib.Yellowbox();
	this.instance.parent = this;
	this.instance.setTransform(495.8,45);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(195));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_inviso = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// inviso
	this.button_1 = new lib.invisbtn();
	this.button_1.name = "button_1";
	this.button_1.parent = this;
	this.button_1.setTransform(364,45,2.4267,0.15);
	new cjs.ButtonHelper(this.button_1, 0, 1, 2, false, new lib.invisbtn(), 3);

	this.timeline.addTween(cjs.Tween.get(this.button_1).wait(195));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_Image_Blur = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Image_Blur
	this.instance = new lib.Tween2("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-1007,45.05,1,0.2731);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:1284},9).to({_off:true},1).wait(39).to({_off:false,x:-1007},0).to({x:1284},9).to({_off:true},1).wait(44).to({_off:false,x:-1007},0).to({x:1284},9).to({_off:true},1).wait(82));

}).prototype = p = new cjs.MovieClip();


(lib.logofastlane = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.logo_fast_lane_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(-0.1,-0.1,1,1,0,0,0,-0.1,-0.1);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.logofastlane, new cjs.Rectangle(-64.1,-21.5,128.2,42.9), null);


(lib.hertzlogo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.hertz_logo_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.hertzlogo, new cjs.Rectangle(-58.5,-20.5,117,40.9), null);


(lib.copy2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.copy_2_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(278.6,-452.4,1,1,0,0,0,278.6,-452.4);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.copy2, new cjs.Rectangle(238.8,-472.4,81.19999999999999,36.39999999999998), null);


(lib.copy1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.copy_1_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(288.2,-354.9,1,1,0,0,0,288.2,-354.9);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.copy1, new cjs.Rectangle(138.1,-377,299.9,36.39999999999998), null);


(lib.buttonbase = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.button_base_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.buttonbase, new cjs.Rectangle(-84,-17.5,168,35.1), null);


(lib.button_bouncing_shadow = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// shadow
	this.instance = new lib.shadow();
	this.instance.parent = this;
	this.instance.setTransform(0.5,26.45);
	this.instance.alpha = 0.4219;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:0.73},25).to({scaleX:1},26).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.button_bouncing_button_base = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button_base
	this.instance = new lib.buttonbase();
	this.instance.parent = this;
	this.instance.setTransform(0,-14.85);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:-21.35},25).to({y:-14.85},26).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_Hertz_Logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Hertz_Logo
	this.text = new cjs.Text("*When using CLEAR at participating locations only. Actual times may vary.", "8px 'Arial'", "#363636");
	this.text.textAlign = "center";
	this.text.lineHeight = 11;
	this.text.lineWidth = 297;
	this.text.parent = this;
	this.text.setTransform(437.85,75.8);

	this.instance = new lib.hertzlogo();
	this.instance.parent = this;
	this.instance.setTransform(658.1,45.1,0.7757,0.7757,0,0,0,0.2,0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance},{t:this.text}]}).to({state:[]},113).wait(82));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_copy_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// copy_2
	this.instance = new lib.copy2();
	this.instance.parent = this;
	this.instance.setTransform(26.75,504.95);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(58).to({_off:false},0).to({x:162.2,y:503.95,alpha:1},4,cjs.Ease.sineOut).to({_off:true},51).wait(82));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_copy_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// copy_1
	this.instance = new lib.copy1();
	this.instance.parent = this;
	this.instance.setTransform(150.5,331.55);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(8).to({_off:false},0).to({x:151.3,y:385.55},5).to({_off:true},100).wait(82));

}).prototype = p = new cjs.MovieClip();


(lib.buttonbouncing = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_51 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(51).call(this.frame_51).wait(1));

	// button_base_obj_
	this.button_base = new lib.button_bouncing_button_base();
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
	this.shadow = new lib.button_bouncing_shadow();
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

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-84,-38.9,168,71.4);


(lib.end_block_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.logofastlane();
	this.instance.parent = this;
	this.instance.setTransform(335.85,-405.2,0.6699,0.6699,0,0,0,7.2,-8.6);

	this.instance_1 = new lib.hertzlogo();
	this.instance_1.parent = this;
	this.instance_1.setTransform(244.6,-410,0.6699,0.6699,0,0,0,-4.4,-7.5);

	this.instance_2 = new lib.textend();
	this.instance_2.parent = this;
	this.instance_2.setTransform(290.35,-253.35);

	this.instance_3 = new lib.buttonbouncing();
	this.instance_3.parent = this;
	this.instance_3.setTransform(506.45,-416.7,0.65,0.65,0,0,0,0.1,-0.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_3},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.end_block_Layer_1, null, null);


(lib.endblock = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.end_block_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(351.6,-350.6,1,1,0,0,0,351.6,-350.6);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.endblock, new cjs.Rectangle(137.4,-458.7,423.6,73.59999999999997), null);


(lib.Scene_1_lockup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// lockup
	this.instance = new lib.endblock();
	this.instance.parent = this;
	this.instance.setTransform(149.9,552.55);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(113).to({_off:false},0).to({y:464.45},7,cjs.Ease.quartOut).wait(75));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib.Hertz_Marvel_LearnMore_GDNHTML5_728x90_02062019 = function(mode,startPosition,loop) {
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
	this.inviso = new lib.Scene_1_inviso();
	this.inviso.name = "inviso";
	this.inviso.parent = this;
	this.inviso.setTransform(364,45,1,1,0,0,0,364,45);
	this.inviso.depth = 0;
	this.inviso.isAttachedToCamera = 0
	this.inviso.isAttachedToMask = 0
	this.inviso.layerDepth = 0
	this.inviso.layerIndex = 0
	this.inviso.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.inviso).wait(195));

	// Hertz_Logo_obj_
	this.Hertz_Logo = new lib.Scene_1_Hertz_Logo();
	this.Hertz_Logo.name = "Hertz_Logo";
	this.Hertz_Logo.parent = this;
	this.Hertz_Logo.setTransform(495.2,59.6,1,1,0,0,0,495.2,59.6);
	this.Hertz_Logo.depth = 0;
	this.Hertz_Logo.isAttachedToCamera = 0
	this.Hertz_Logo.isAttachedToMask = 0
	this.Hertz_Logo.layerDepth = 0
	this.Hertz_Logo.layerIndex = 1
	this.Hertz_Logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Hertz_Logo).wait(195));

	// lockup_obj_
	this.lockup = new lib.Scene_1_lockup();
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
	this.copy_2 = new lib.Scene_1_copy_2();
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
	this.copy_1 = new lib.Scene_1_copy_1();
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
	this.Yellow_box = new lib.Scene_1_Yellow_box();
	this.Yellow_box.name = "Yellow_box";
	this.Yellow_box.parent = this;
	this.Yellow_box.setTransform(495.8,45,1,1,0,0,0,495.8,45);
	this.Yellow_box.depth = 0;
	this.Yellow_box.isAttachedToCamera = 0
	this.Yellow_box.isAttachedToMask = 0
	this.Yellow_box.layerDepth = 0
	this.Yellow_box.layerIndex = 5
	this.Yellow_box.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Yellow_box).wait(195));

	// Image_Blur_obj_
	this.Image_Blur = new lib.Scene_1_Image_Blur();
	this.Image_Blur.name = "Image_Blur";
	this.Image_Blur.parent = this;
	this.Image_Blur.setTransform(-995.5,45,1,1,0,0,0,-995.5,45);
	this.Image_Blur.depth = 0;
	this.Image_Blur.isAttachedToCamera = 0
	this.Image_Blur.isAttachedToMask = 0
	this.Image_Blur.layerDepth = 0
	this.Image_Blur.layerIndex = 6
	this.Image_Blur.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Image_Blur).wait(195));

	// images_obj_
	this.images = new lib.Scene_1_images();
	this.images.name = "images";
	this.images.parent = this;
	this.images.depth = 0;
	this.images.isAttachedToCamera = 0
	this.images.isAttachedToMask = 0
	this.images.layerDepth = 0
	this.images.layerIndex = 7
	this.images.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.images).wait(195));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1927,-40,4518,242.9);
// library properties:
lib.properties = {
	id: '18A945673E934188A56411646C4FB36A',
	width: 728,
	height: 90,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"/images/728x90/index_atlas_P_.png?1549578179263", id:"index_atlas_P_"},
		{src:"/images/728x90/index_atlas_NP_.jpg?1549578179263", id:"index_atlas_NP_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

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
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
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

AdobeAn.Layer = new function() {
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


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;