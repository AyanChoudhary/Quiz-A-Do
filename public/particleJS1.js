particlesJS(
    "particles-js", {
        "particles": {
          "number": {
            "value": 200,
            "density": {
              "enable": true,
              "value_area": 789.1476416322727
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 3,
              "color": "#370000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 1,
            "random": true,
            "anim": {
              "enable": true,
              "speed": 1.3805312609122866,
              "opacity_min": 0.50301930307533628,
              "sync": true
            }
          },
          "size": {
            "value": 8,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 120.3412060865523,
            "color": "#ffffff",
            "opacity": 0.49705773886831206,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "left",
            "random": true,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": true,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "bubble"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 300,
              "size": 20.301930307533627,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      });var count_particles, stats, update; stats = new Stats; stats.setMode(0); 
        
        stats.domElement.style.position = 'absolute'; 
        stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; 
        stats.domElement.style.display = 'none';