

(function () {
	(function (j) {
		var h, e, c, a, g, b, f, k, i, d;
		h = function (m, l) {
			this.$element = m;
			this.$slides = this.$element.find(".slides ul li");
			if (this.$slides.length < 1) {
				this.$slides = this.$element.find('[data-group="slides"] ul li')
			}
			this.$prevNext = this.$element.find("[data-jump]");
			this.$pages = this.$element.find("[data-jump-to]");
			this.$slidesContainer = this.$element.find('[data-group="slides"]');
			this.$rel = this.$element.find('[data-group="slides"] ul');
			this.$rel.css("position", "relative");
			this.slideChangeInProgress = false;
			this.interval = false;
			this.options = l;
			this.current = l.current;
			this.set(2, true);
			return null
		};
		h.prototype = {
			getGlobalWidth: function () {
				return this.$element.width()
			},
			updateControls: function () {
				this.$pages.removeClass("active");
				return this.$pages.filter("[data-jump-to=" + (this.current - 1) + "]").addClass("active")
			},
			runAnimations: function () {
				var l, m;
				m = this;
				l = j(this.$slides[this.current - 1]).find("[data-animate]");
				return l.each(function () {
					var n;
					n = j(this);
					return m.options.animations[n.data("animate")](n, n.data("delay"), n.data("length"))
				})
			},
			hideAnimatedCaptions: function (l) {
				return j(this.$slides[l - 1]).find("[data-animate]").css({
					opacity: 0
				})
			},
			calculateScroll: function (l) {
				var m;
				m = this.getGlobalWidth();
				return (l - 1) * m
			},
			resize: function () {
				return this.$rel.css("right", this.calculateScroll(this.current))
			},
			jump: function (m, l, n) {
				var s, q, p, o;
				if (l == null) {
					l = this.options.transitionTime
				}
				if (n == null) {
					n = false
				}
				p = this;
				if (m === p.current) {
					n = true
				}
				if (this.$slides.length >= m && !this.slideChangeInProgress) {
					q = this.getGlobalWidth();
					if (!n) {
						this.hideAnimatedCaptions(m)
					}
					o = void 0;
					if (this.options.parallax) {
						this.currentBgPosition = parseInt(p.$slidesContainer.css("background-position"));
						this.moveStartScroll = parseInt(this.$rel.css("right"), 10);
						o = function () {
							var r;
							r = Math.round(p.currentBgPosition - (p.moveStartScroll - parseInt(p.$rel.css("right"), 10)) * p.options.parallaxDistance * p.options.parallaxDirection) + "px 0";
							return p.$slidesContainer.css("background-position", r)
						}
					}
					s = {
						duration: l,
						step: o,
						done: function () {
							if (m === 1) {
								p.hideAnimatedCaptions(p.$slides.length - 1);
								p.set(p.$slides.length - 1)
							} else {
								if (m === p.$slides.length) {
									p.hideAnimatedCaptions(2);
									p.set(2)
								} else {
									p.current = m
								}
							}
							p.updateControls();
							if (!n) {
								p.runAnimations()
							}
							p.options.onSlideChange.call(this);
							return null
						},
						always: function () {
							p.slideChangeInProgress = false;
							return null
						}
					};
					this.slideChangeInProgress = true;
					this.$rel.animate({
						right: this.calculateScroll(m)
					}, s)
				}
				return null
			},
			set: function (l, n) {
				var m;
				if (n == null) {
					n = false
				}
				m = this.getGlobalWidth();
				this.$rel.css("right", this.calculateScroll(l));
				this.current = l;
				this.updateControls();
				return null
			},
			movestart: function (l) {
				if (this.options.parallax) {
					this.currentBgPosition = parseInt(this.$slidesContainer.css("background-position"))
				}
				this.hideAnimatedCaptions(this.current - 1);
				this.hideAnimatedCaptions(this.current + 1);
				this.moveStartScroll = parseInt(this.$rel.css("right"), 10);
				this.$rel.stop();
				this.$rel.addClass("drag");
				return this.timeStart = new Date()
			},
			move: function (m) {
				var l;
				if (this.options.parallax) {
					l = Math.round(this.currentBgPosition - m.distX * this.options.parallaxDistance * this.options.parallaxDirection) + "px 0";
					this.$slidesContainer.css("background-position", l)
				}
				return this.$rel.css("right", this.moveStartScroll - m.distX)
			},
			moveend: function (p) {
				var n, m, q, o, l;
				n = Math.abs(p.distX);
				o = (new Date()).getTime() - this.timeStart.getTime();
				q = this.getGlobalWidth();
				m = n / q;
				l = (o / m) * (1 - m);
				l = l < 1000 ? l : 1000;
				this.$rel.removeClass("drag");
				if (n < q / this.options.moveDistanceToSlideChange) {
					return this.jump(this.current, l, true)
				} else {
					if (p.distX < 0) {
						return this.next(l)
					} else {
						return this.prev(l)
					}
				}
			},
			prev: function (l, m) {
				if (l == null) {
					l = this.options.transitionTime
				}
				if (m == null) {
					m = false
				}
				this.jump(this.current - 1, l, m);
				return this.options.onSlidePrev.call(this)
			},
			next: function (l, m) {
				if (l == null) {
					l = this.options.transitionTime
				}
				if (m == null) {
					m = false
				}
				this.jump(this.current + 1, l, m);
				return this.options.onSlideNext.call(this)
			}
		};
		j.fn.responsiveSlider = function (o) {
			var n, s, m, l, p, q;
			p = this;
			m = j.extend({}, j.fn.responsiveSlider.defaults, typeof o === "object" && o);
			m.animations = j.fn.responsiveSlider.animations;
			l = {
				next: "next",
				prev: "prev"
			};
			n = function (t, r) {
				clearInterval(r);
				t.off("mouseover");
				t.off("mouseleave");
				return null
			};
			s = function (w) {
				var v, r, u, t;
				m = j.metadata ? j.extend({}, m, w.metadata()) : m;
				t = w.find("ul li");
				if (t.length > 1) {
					v = j(t[0]);
					r = j(t[t.length - 1]);
					v.before(r.clone());
					r.after(v.clone())
				}
				w.data("slider", (u = new h(w, m)));
				if (m.autoplay) {
					u.interval = setInterval((function () {
						return u.next()
					}), m.interval);
					w.on("mouseover", function () {
						return clearInterval(u.interval)
					});
					w.on("mouseleave", function () {
						clearInterval(u.interval);
						return u.interval = setInterval((function () {
							return u.next()
						}), m.interval)
					})
				}
				j(window).on("resize", function () {
					return u.resize()
				});
				w.find("[data-jump]").on("click", function () {
					u[j(this).data("jump")]();
					return false
				});
				w.find("[data-jump-to]").on("click", function () {
					u.jump(j(this).data("jump-to") + 1);
					m.onSlidePageChange.call(this);
					return false
				});
				if (m.touch) {
					return w.find('[data-group="slide"]').on("movestart", function (x) {
						n(w, u.interval);
						return u.movestart(x)
					}).on("move", function (x) {
						return u.move(x)
					}).on("moveend", function (x) {
						return u.moveend(x)
					})
				}
			};
			q = function () {
				return p.each(function () {
					var t, r;
					t = j(this);
					r = t.data("slider");
					if (!r) {
						s(t, m)
					} else {
						if (typeof o === "string") {
							r[l[o]]()
						} else {
							if (typeof o === "number") {
								r.jump(Math.abs(o) + 1)
							}
						}
					}
					return t
				})
			};
			if (j.fn.responsiveSlider.run) {
				return q()
			} else {
				j(window).on("load", q);
				return j.fn.responsiveSlider.run = true
			}
		};
		j.fn.responsiveSlider.animations = {
			slideAppearRightToLeft: function (p, m, o) {
				var l, n;
				if (m == null) {
					m = 0
				}
				if (o == null) {
					o = 300
				}
				n = {
					"margin-left": 100,
					"margin-right": -100
				};
				p.css(n);
				l = function () {
					n = {
						"margin-left": 0,
						"margin-right": 0,
						opacity: 1
					};
					return p.animate(n, o)
				};
				if (m > 0) {
					return setTimeout(l, m)
				} else {
					return l()
				}
			},
			slideAppearLeftToRight: function (p, m, o) {
				var l, n;
				if (m == null) {
					m = 0
				}
				if (o == null) {
					o = 300
				}
				n = {
					"margin-left": -100,
					"margin-right": 100
				};
				p.css(n);
				l = function () {
					n = {
						"margin-left": 0,
						"margin-right": 0,
						opacity: 1
					};
					return p.animate(n, o)
				};
				if (m > 0) {
					return setTimeout(l, m)
				} else {
					return l()
				}
			},
			slideAppearUpToDown: function (p, m, o) {
				var l, n;
				if (m == null) {
					m = 0
				}
				if (o == null) {
					o = 300
				}
				n = {
					"margin-top": 100,
					"margin-bottom": -100
				};
				p.css(n);
				l = function () {
					n = {
						"margin-top": 0,
						"margin-bottom": 0,
						opacity: 1
					};
					return p.animate(n, o)
				};
				if (m > 0) {
					return setTimeout(l, m)
				} else {
					return l()
				}
			},
			slideAppearDownToUp: function (p, m, o) {
				var l, n;
				if (m == null) {
					m = 0
				}
				if (o == null) {
					o = 300
				}
				n = {
					"margin-top": -100,
					"margin-bottom": 100
				};
				p.css(n);
				l = function () {
					n = {
						"margin-top": 0,
						"margin-bottom": 0,
						opacity: 1
					};
					return p.animate(n, o)
				};
				if (m > 0) {
					return setTimeout(l, m)
				} else {
					return l()
				}
			}
		};
		j.fn.responsiveSlider.defaults = {
			autoplay: false,
			interval: 5000,
			touch: true,
			parallax: false,
			parallaxDistance: 1 / 10,
			parallaxDirection: 1,
			transitionTime: 300,
			moveDistanceToSlideChange: 4,
			onSlideChange: function () {},
			onSlideNext: function () {},
			onSlidePrev: function () {},
			onSlidePageChange: function () {}
		};
		j.fn.responsiveSlider.run = false;
		k = j('[data-spy="responsive-slider"]');
		if (k.length) {
			a = {};
			if (e = k.data("autoplay")) {
				a.autoplay = e
			}
			if (c = k.data("interval")) {
				a.interval = c
			}
			if (g = k.data("parallax")) {
				a.parallax = g
			}
			if (f = k.data("parallax-distance")) {
				a.parallaxDistance = parseInt(f, 10)
			}
			if (b = k.data("parallax-direction")) {
				a.parallaxDirection = parseInt(b, 10)
			}
			if (!(i = k.data("touch"))) {
				a.touch = i
			}
			if (d = k.data("transitiontime")) {
				a.transitionTime = d
			}
			k.responsiveSlider(a)
		}
		return null
	})(jQuery)
}).call(this);
