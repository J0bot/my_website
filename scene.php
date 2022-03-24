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

      <!--Rotating giant cube-->
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

        <!-- Info panel of the selected movie. -->
        <a-entity
          id="infoPanel"
          position="0 0 0.5"
          info-panel
          visible="false"
          scale="0.001 0.001 0.001"
          geometry="primitive: plane; width: 1.5; height: 1.8"
          material="color: #333333; shader: flat; transparent: false" class="raycastable">
          <a-entity id="ponyoMovieImage" mixin="movieImage" material="src: #ponyo" visible="false"></a-entity>
          <a-entity id="kazetachinuMovieImage" mixin="movieImage" material="src: #kazetachinu" visible="false"></a-entity>
          <a-entity id="karigurashiMovieImage" mixin="movieImage" material="src: #karigurashi" visible="false"></a-entity>
          <a-entity id="movieTitle"
            position="-0.68 -0.1 0"
            text="shader: msdf; anchor: left; width: 1.5; font: https://cdn.aframe.io/examples/ui/Viga-Regular.json; color: white; value: Ponyo (2003)"></a-entity>
          <a-entity id="movieDescription"
            position="-0.68 -0.2 0"
            text="baseline: top; shader: msdf; anchor: left; font: https://cdn.aframe.io/examples/ui/Viga-Regular.json; color: white; value: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></a-entity>
        </a-entity>
      </a-entity>
    </a-scene>