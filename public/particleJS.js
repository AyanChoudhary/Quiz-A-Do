particlesJS(
    "particles-js", {
        "particles":
        {"number":
        {"value":200,"density":
        {"enable":true,"value_area":1000}},
        
        "color":{"value":"#ffffff"},
        
        "shape":{"type":"circle","stroke":{
            "width":2,"color":"#ffffff"},
        
        "polygon":{"nb_sides":10},
        
        "image":{"src":"img/github.svg","width":1000,"height":1000}},
        
        "opacity":{"value":0.5,"random":false,"anim":{
            "enable":true,"speed":10,"opacity_min":1,"sync":true}},
        
        "size":{"value":7.83721462448409,"random":true,"anim":{
            "enable":true,"speed":31.67101127975246,"size_min":1.6241544246026904,"sync":false}},
        
        "line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.49705773886831206,"width":1.5},
        
        "move":{"enable":true,"speed":6,"direction":"top-right","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{
            "enable":true,"rotateX":600,"rotateY":1200}}},
        
        "interactivity":{"detect_on":"window","events":{
            "onhover":{"enable":true,"mode":"grab"},
        
        "onclick":{"enable":true,"mode":"repulse"},"resize":true},
        
        "modes":{"grab":{"distance":300,"line_linked":{
            "opacity":1}},
        
        "bubble":{"distance":400,"size":16.241544246026905,"duration":0.8932849335314796,"opacity":0.9014057056544931,"speed":3},
        
        "repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},
        
        "retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); 
        
        stats.domElement.style.position = 'absolute'; 
        stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; 
        stats.domElement.style.display = 'none';