<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Model Viewer</title>
    <style>
        body { margin: 0; }
        canvas { display: block; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/three@v0.163.0/build/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@v0.163.0/examples/jsm/loaders/OBJLoader.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@v0.163.0/examples/jsm/controls/OrbitControls.js"></script>
        

<script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
<script type="importmap">
  {
    "imports": {
      "three": "https://unpkg.com/three@v0.163.0/build/three.module.js",
      "three/addons/": "https://unpkg.com/three@v0.163.0/examples/jsm/"
    }
  }
</script>
{{-- <script type="importmap">
    {
      "imports": {
        "three": "https://cdn.jsdelivr.net/npm/three@<version>/build/three.module.js",
        "three/addons/": "https://cdn.jsdelivr.net/npm/three@<version>/examples/jsm/"
      }
    }
  </script> --}}

</head>
<body>
    <div id="progress-container">
        <div id="progress">Engaging Hyperdrive...</div>
      </div>

    <script type="module" src="{{ asset('js/three.js') }}"></script>
</body>
</html>
