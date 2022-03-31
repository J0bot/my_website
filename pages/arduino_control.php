<p>Avant de commencer il faut Autoriser le "Contenu non sécurisé" dans les paramètres du site</p>
<img src="src/img/enableContent.png"></img>
<br>
<h1>Panneau de contrôle</h1>
<button onclick="StartMotors()">Start Motors</button>
<button onclick="StopMotors()">Stop Motors</button>
<br>
<button onclick="FrontMotor(1)">Avancer Moteur 1</button>
<button onclick="FrontMotor(2)">Avancer Moteur 2</button>
<br>
<button onclick="BackMotor(1)">Reculer Moteur 1</button>
<button onclick="BackMotor(2)">Reculer Moteur 2</button>
<br>
<br>

<script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>
<script type="importmap">
			{
				"imports": {
					"three": "/src/js/three.module.js"
				}
			}
</script>

<script type="module">

    import * as THREE from 'three';

    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x950024);
    const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

    const renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth/2, window.innerHeight/2 );
    document.body.appendChild( renderer.domElement );

    const geometry = new THREE.BoxGeometry();
    const green_material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
    const red_material = new THREE.MeshBasicMaterial( { color: 0xff0000 } );
    const blue_material = new THREE.MeshBasicMaterial( { color: 0x0000ff } );
    const cube = new THREE.Mesh( geometry, blue_material );
    const start = new THREE.Mesh( geometry, green_material );
    start.position.x = -3;
    const stop = new THREE.Mesh( geometry, red_material );
    stop.position.x = 3;
    scene.add( cube );
    scene.add( start );
    scene.add( stop );

    

    camera.position.z = 5;

    function animate() {
        requestAnimationFrame( animate );

        cube.rotation.x += 0.01;
        cube.rotation.y += 0.01;

        renderer.render( scene, camera );
    };

    animate();
</script>
