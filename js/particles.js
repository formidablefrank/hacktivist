(function() {
	$(function() {
		var canvas = document.getElementById("global-particle-canvas");
		var context = canvas.getContext("2d");

		canvas.width = window.outerWidth;
		canvas.height = window.outerHeight;

		function Particle(x, y, r, v) {
			this.x = x;
			this.y = y;
			this.r = r;
			this.v = v;
		}

		var particles = [];

		for (var i = 0; i < 50; i++) {
			particles.push(new Particle(
				Math.random() * canvas.width,
				Math.random() * canvas.height,
				Math.random() * 3 + 2,
				Math.random() * 0.25 + 0.1));
		}

		for(var i = 0; i < particles.length; i++) {
			var p = particles[i];

			context.beginPath();
			context.arc(p.x, p.y, p.r, 0, 2 * Math.PI, false);
			context.fillStyle = "rgba(255,255,255,0.7)";
			context.fill();
			context.closePath();
		}

		function loop() {
			context.clearRect(0, 0, canvas.width, canvas.height);

			var dst = document.documentElement.scrollTop - st;
			for(var i = 0; i < particles.length; i++) {
				var p = particles[i];

				if (p.y < -(p.r*3)) {
					p.y = canvas.height + (p.r * 2);
					p.x = Math.random() * canvas.width;
					p.v = Math.random();
				} else if (p.y > canvas.height + (p.r*3)) {
					p.y = 0 - (p.r * 2);
					p.x = Math.random() * canvas.width;
					p.v = Math.random();
				} else {
					p.y -= p.v * dst * 4 + p.v;
				}

				context.beginPath();
				context.arc(p.x, p.y, p.r, 0, 2 * Math.PI, false);
				context.fillStyle = "rgba(255,255,255,0.7)";
				context.shadowBlur = 5;
				context.shadowColor = "#FFFFFF";
				context.fill();
				context.closePath();
			}

			st = document.documentElement.scrollTop;
			window.requestAnimationFrame(loop);
		}

		var st = document.documentElement.scrollTop;
		loop();
	});
})();