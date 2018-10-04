Util.Objects["toys"] = new function() {
	this.init = function(scene) {

		scene.resized = function() {
//			u.bug("scene.resized:" + u.nodeId(this));
		}

		scene.scrolled = function() {
//			u.bug("scene.scrolled:" + u.nodeId(this))
		}

		scene.ready = function() {
			// u.bug("scene.ready:" + u.nodeId(this))
			u.qs(".scene div").innerHTML = "The toys are ready!";

		}

		// scene is ready
		scene.ready();
	}
}
