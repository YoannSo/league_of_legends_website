//Variables for setup

let container;
let camera;
let renderer;
let scene;
let ahri;


function init() {

    container = document.querySelector(".scene");

    //Create scene
    scene = new THREE.Scene();

    const fov = 35;
    const aspect = container.clientWidth / container.clientHeight;
    const near = 0.1;
    const far = 1000;

    //Camera setup
    camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
    camera.position.set(0, 130, 500);

    const ambient = new THREE.AmbientLight(0x404040, 10);
    scene.add(ambient);

    const light = new THREE.DirectionalLight(0xffffff, 2);
    light.position.set(50, 50, 100);
    scene.add(light);
    //Renderer
    renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    container.appendChild(renderer.domElement);

    //Load Model
    let loader = new THREE.GLTFLoader();
    loader.load("scene.gltf", function(gltf) {
        scene.add(gltf.scene);
        ahri = gltf.scene.children[0];
        ahri.position.set(0,10,0);
        ahri.scale.set(1,1,1);
        animate();

    });

}

function animate() {
    requestAnimationFrame(animate);
    ahri.rotation.z+=0.001;

    renderer.render(scene, camera);
}

init();

function onWindowResize() {
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();

    renderer.setSize(container.clientWidth, container.clientHeight);
}

window.addEventListener("resize", onWindowResize);
