<a-scene
    background="color: #212"
    cursor="rayOrigin: mouse; fuse: false" raycaster="objects: .raycastable">

    <a-entity
    id="background"
    position="0 0 0"
    geometry="primitive: ring"
    material="color: red; side: back; shader: flat"
    scale="0.001 0.001 0.001"
    visible="false" class="raycastable">
    </a-entity>

    <a-entity
        position="0 1.6 0"
        camera look-controls="magicWindowTrackingEnabled: false; touchEnabled: false; mouseEnabled: false">
    </a-entity>

    <a-entity 
    id="refresh-button"
        position="-6 2 -7"
        geometry="depth: 3; height: 3; width: 3" 
        rotation="-22.33 -31.3 -41.74" 
        animation="property: rotation; dur: 100000;
                       to: 0 3600 0; loop: false"
    >
    </a-entity>
    
    <a-entity 
    id="refresh-button"
        position="6 2 -7"
        geometry="depth: 3; height: 3; width: 3" 
        rotation="-22.33 -31.3 -41.74" 
        animation="property: rotation; dur: 100000;
                       to: 0 3600 0; loop: false"
    >
    </a-entity>

    <a-entity 
    id="refresh-button"
    scale="10 10 10"
    position="0 3.5 -3"
    text="align:center; value:Error 404, page not found"></a-entity>

    <a-entity id="refresh-button" geometry="primitive: box" material="color: red" position="0 1.5 -2"></a-entity>
 
</a-scene>

<script>
    document.querySelector('#refresh-button').addEventListener('click', function() {
        window.location.href = "https://j0bot.ch/";

    });
</script>