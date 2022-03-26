<a-scene
    background="color: #212"
    cursor="rayOrigin: mouse; fuse: false" raycaster="objects: .raycastable">

    <a-entity
    position="0 1.6 0"
    camera look-controls="magicWindowTrackingEnabled: true; touchEnabled: true; mouseEnabled: true">
        <a-entity
        id="fadeBackground"
        geometry="primitive: sphere; radius: 2.5"
        material="color: black; side: back; shader: flat; transparent: true; opacity: 0.6" visible="false">
        </a-entity>
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
        position="0 1.6 0"
        camera look-controls="magicWindowTrackingEnabled: false; touchEnabled: false; mouseEnabled: false">
    </a-entity>

 
</a-scene>

