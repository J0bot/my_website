<a-scene
    background="color: #FF00ff"    
>
    <a-assets>
    <a-asset-item id="astronaut" src="/src/img/scene.gltf"></a-asset-item>
    </a-assets>

        <!-- Hand controls -->
        <a-entity
        id="fadeBackground"
        geometry="primitive: sphere; radius: 2.5"
        material="color: black; side: back; shader: flat; transparent: true; opacity: 0.6" visible="false">
        </a-entity>
    </a-entity>

    <!-- 
    This work is based on "Spaceman Model" (https://sketchfab.com/3d-models/spaceman-model-4494aa9be0c84b9dbef590a588b493cf) by likesenape (https://sketchfab.com/likesenape) licensed under CC-BY-4.0 (http://creativecommons.org/licenses/by/4.0/)
    -->
    <a-entity gltf-model="#astronaut"></a-entity>
    


    <a-entity
        id="control_panel" 
        scale="1.12833 0.86771 1" 
        material="color: #d9f88f" 
        rotation="-13.887923996176024 0 0" 
        position="0 1.45831 -1.86839" 
        geometry="depth: 0.05; height: 2; width: 2.42">
    </a-entity>

    <a-entity
        id="background"
        position="0 0 0"
        geometry="primitive: ring"
        material="color: red; side: back; shader: flat"
        scale="0.001 0.001 0.001"
        visible="false" class="raycastable">
    </a-entity>

    <a-entity 
        id="rotating_cube"
        position="0 13.39643 -21.18437"
        geometry="depth: 3; height: 3; width: 3" 
        rotation="-22.33 -31.3 -41.74" 
        animation="property: rotation; dur: 1000000;
                       to: 0 36000 0; loop: false"
    >
    </a-entity>

    <a-entity 
        id="on_off_button" rotation="-13.888 0 0" scale="3.51817 3.51817 3.51817" 
        position="-0.01155 0.95374 -1.69899" 
        geometry="width: 0.11; height: 0.05; depth: 0.04" 
        material="color: #FF0000" 
        >
        <a-animation attribute="scale" begin="mouseenter" dur="0"  to="4 4 4"></a-animation>
        <a-animation attribute="scale" begin="mouseleave" dur="0"  to="3.51817 3.51817 3.51817"></a-animation>
        <a-animation attribute="material.color" begin="mouseenter" dur="0"  to="#00ff00"></a-animation>
        <a-animation attribute="material.color" begin="mouseleave" dur="0"  to="#FF0000"></a-animation>


        <a-entity 
            position="0 0 0.02" 
            text="value: on; color: black; align: center" 
            scale="0.75 0.75 0.75">
        </a-entity>
    </a-entity>

    <a-sky src="https://cdn.glitch.me/0dd56231-cb65-46f8-ad38-225931845e77%2Fsky1.jpg"></a-sky>


    <a-entity position="0 1.5 0">
        <a-entity camera mouse-cursor>
        </a-entity>
    </a-entity>

    


</a-scene>

<script>
    //alert("Il n'y a pas de tests");

</script>