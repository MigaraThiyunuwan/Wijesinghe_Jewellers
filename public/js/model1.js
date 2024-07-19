import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.outputColorSpace = THREE.SRGBColorSpace;

renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setClearColor(0x808080);
renderer.setPixelRatio(window.devicePixelRatio);

renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;

document.body.appendChild(renderer.domElement);

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
camera.position.set(60, 60, 50);
//camera.position.set(-3, 0, 11);

const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;
controls.enablePan = false;
controls.minDistance = 2;
controls.maxDistance = 2000;
//controls.maxDistance = 20;
// controls.minPolarAngle = 0.5;
// controls.maxPolarAngle = 1.5;
controls.autoRotate = false;
controls.target = new THREE.Vector3(0, 1, 0);
controls.update();

const spotLight = new THREE.SpotLight(0xffffff, 3000, 100, 0.22, 1);
spotLight.position.set(20, 25, 10);
spotLight.castShadow = true;
spotLight.shadow.bias = -0.0001;
scene.add(spotLight);

const directionalLight = new THREE.DirectionalLight(0xffffff, 10);
directionalLight.position.set(0, 0, 1); // Light direction (from front)
scene.add(directionalLight);

const directionalLight2 = new THREE.DirectionalLight(0xffffff, 10);
directionalLight2.position.set(0, 0, -1); // Light direction (from back)
scene.add(directionalLight2);

const directionalLight3 = new THREE.DirectionalLight(0xffffff, 10);
directionalLight3.position.set(1, 0, 0); // Light direction (from right)
scene.add(directionalLight3);

const directionalLight4 = new THREE.DirectionalLight(0xffffff, 10);
directionalLight4.position.set(-1, 0, 0); // Light direction (from left)
scene.add(directionalLight4);

// fetch('/getModelId')
//     .then(response => response.json())
//     .then(data => {
//         console.log(data.cus_req_id); 
//         const loader = new GLTFLoader().setPath(`/storage/models/${data.cus_req_id}/`);
// });

// //const loader = new GLTFLoader().setPath('/storage/models/5/');
// loader.load('scene.gltf', (gltf) => {
//   console.log('loading model');
//   const mesh = gltf.scene;

//   mesh.traverse((child) => {
//     if (child.isMesh) {
//       child.castShadow = true;
//       child.receiveShadow = true;
//     }
//   });

//   mesh.position.set(-2, 1.05, 0);
//   scene.add(mesh);

//   document.getElementById('progress-container').style.display = 'none';
// }, (xhr) => {
//   console.log(`loading ${xhr.loaded / xhr.total * 100}%`);
// }, (error) => {
//   console.error(error);
//   console.log('loading error');
// });

fetch('/getModelId')
    .then(response => response.json())
    .then(data => {
        console.log(data.cus_req_id); 
        const loader = new GLTFLoader().setPath(`/storage/models/${data.cus_req_id}/`);
        
        // Load the model only after setting the path
        loader.load('scene.gltf', (gltf) => {
            console.log('loading model');
            const mesh = gltf.scene;

            mesh.traverse((child) => {
                if (child.isMesh) {
                    child.castShadow = true;
                    child.receiveShadow = true;
                }
            });

           // mesh.position.set(-2, 1.05, 0);
           mesh.position.set(20, 0, 10);
           mesh.scale.set(0.3, 0.3, 0.3); 
            scene.add(mesh);

            document.getElementById('progress-container').style.display = 'none';
        }, (xhr) => {
            console.log(`loading ${xhr.loaded / xhr.total * 100}%`);
        }, (error) => {
            console.error(error);
            console.log('loading error');
        });
    })
    .catch(error => console.error('Error fetching session data:', error));

window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});

// Create a plane geometry that will cover the entire view
const planeGeometry = new THREE.PlaneGeometry(2, 2, 1, 1);

// Define a shader material with a gradient
const gradientMaterial = new THREE.ShaderMaterial({
  uniforms: {
    topColor: { value: new THREE.Color(0x968d66) }, // Top gradient color
    bottomColor: { value: new THREE.Color(0x001a33) }, // Bottom gradient color
  },
  vertexShader: `
    varying vec2 vUv;
    void main() {
      vUv = uv;
      gl_Position = vec4(position, 1.0);
    }
  `,
  fragmentShader: `
    uniform vec3 topColor;
    uniform vec3 bottomColor;
    varying vec2 vUv;
    void main() {
      gl_FragColor = vec4(mix(bottomColor, topColor, vUv.y), 1.0);
    }
  `,
  depthWrite: false,
  depthTest: false,
});

// Create the mesh with the plane geometry and gradient material
const gradientMesh = new THREE.Mesh(planeGeometry, gradientMaterial);
gradientMesh.material.side = THREE.DoubleSide;

// Create an orthographic camera for the gradient plane
const orthoCamera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);

// Add the gradient mesh to the scene
scene.add(gradientMesh);

function animate() {
  requestAnimationFrame(animate);

  // Render the gradient background first
  renderer.autoClear = false; // Disable auto clear
  renderer.clear(); // Clear manually

  renderer.render(scene, orthoCamera); // Render gradient background

  // Render the main scene
  renderer.clearDepth(); // Clear depth buffer for the main scene rendering
  controls.update();
  renderer.render(scene, camera);
}

animate();
