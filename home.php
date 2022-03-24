<a-scene
      background="color: #212"
      environment
      cursor="rayOrigin: mouse; fuse: false" raycaster="objects: .raycastable"
      info-message="htmlSrc: #messageText">
      <a-assets>
        <a-asset-item id="messageText" src="message.html"></a-asset-item>
        <!--
          Image source: http://www.ghibli.jp/works/kazetachinu/#frame&gid=1&pid=1
          Image author: Studio Ghibli
        -->
        <img id="kazetachinuPoster" src="src/img/projets.png" crossorigin="anonymous"/>
        <!--
          Image source: http://www.ghibli.jp/works/ponyo/#frame&gid=1&pid=36
          Image author: Studio Ghibli
        -->
        <img id="ponyoPoster" src="/src/img/CV.png" crossorigin="anonymous"/>
        <!--
          Image source: http://www.ghibli.jp/works/karigurashi/#frame&gid=1&pid=32
          Image author: Studio Ghibli
        -->
        <img id="karigurashiPoster" src="https://cdn.aframe.io/examples/ui/karigurashiPoster.jpg" crossorigin="anonymous"/>
        <a-mixin
          id="frame"
          geometry="primitive: plane; width:1.3 ; height: 1.9"
          material="color: white; shader: flat"
          animation__scale="property: scale; to: 1.2 1.2 1.2; dur: 200; startEvents: mouseenter"
          animation__scale_reverse="property: scale; to: 1 1 1; dur: 200; startEvents: mouseleave"
         ></a-mixin>
         <a-mixin
          id="poster"
          geometry="primitive: plane; width: 1.2; height: 1.8"
          material="color: white; shader: flat"
          material="shader: flat"
          position="0 0 0.005"
         ></a-mixin>
         <a-mixin
          id="movieImage"
          geometry="primitive: plane; width: 1.5; height: 0.81"
          material="src: #ponyo; shader: flat; transparent: true"
          position="0 0.495 0.002"
         ></a-mixin>
      </a-assets>

      <a-entity
        id="background"
        position="0 0 0"
        geometry="primitive: sphere; radius: 2.0"
        material="color: red; side: back; shader: flat"
        scale="0.001 0.001 0.001"
        visible="false" class="raycastable">
      </a-entity>

      <a-entity
        position="0 1.6 0"
        camera look-controls="magicWindowTrackingEnabled: true; touchEnabled: true; mouseEnabled: true">
        <a-entity
          id="fadeBackground"
          geometry="primitive: sphere; radius: 2.5"
          material="color: black; side: back; shader: flat; transparent: true; opacity: 0.6" visible="false">
        </a-entity>
      </a-entity>

      <!--Rotating giant cubes-->
      <a-entity 
        position="-6 4.3 -7"
        geometry="depth: 3; height: 3; width: 3" 
        rotation="-22.33 -31.3 -41.74" 
        animation="property: rotation; dur: 100000;
                       to: 0 3600 0; loop: false"
      >
      </a-entity>
      <a-entity 
        position="6 4.3 -7"
        geometry="depth: 3; height: 3; width: 3" 
        rotation="-22.33 -31.3 -41.74" 
        animation="property: rotation; dur: 100000;
                       to: 0 3600 0; loop: false"
      >
      </a-entity>

      <a-entity 
        position="0 4.3 -7"
        geometry="depth: 3; height: 3; width: 3" 
        rotation="-22.33 -31.3 -41.74" 
        animation="property: rotation; dur: 100000;
                       to: 0 3600 0; loop: false"
      >
      </a-entity>
      <!-- Hand controls -->
      <a-entity id="leftHand" laser-controls="hand: left" raycaster="objects: .raycastable"></a-entity>
      <a-entity id="rightHand" laser-controls="hand: right" raycaster="objects: .raycastable" line="color: #118A7E"></a-entity>

      <a-entity id="ui" position="0 1.6 -2.5">
        <!-- Poster menu -->
        <a-entity id="menu" highlight>
          <a-entity id="karigurashiButton" position="-2 0 0" mixin="frame" class="raycastable menu-button">
            <a-entity material="src: #karigurashiPoster;" mixin="poster"></a-entity>
          </a-entity>

          <a-entity id="kazetachinuButton" position="0 0 0" mixin="frame" class="raycastable menu-button">
            <a-entity material="src: #kazetachinuPoster" mixin="poster"></a-entity>
          </a-entity>

          <a-entity id="ponyoButton" position="2 0 0" mixin="frame" class="raycastable menu-button">
            <a-entity material="src: #ponyoPoster" mixin="poster"></a-entity>
          </a-entity>
        </a-entity>

      </a-entity>
    </a-scene>