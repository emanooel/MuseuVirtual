import * as THREE from 'three';
import { GLTFLoader } from 'https://cdn.jsdelivr.net/npm/three@0.175.0/examples/jsm/loaders/GLTFLoader.js';
import { OrbitControls } from 'https://cdn.jsdelivr.net/npm/three@0.175.0/examples/jsm/controls/OrbitControls.js';



// Cena e câmera
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

// Renderizador
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement); //Adiciona o canvas na pagina html

// Controles de mouse
const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true; //Inercia pra responsividade

let modelo = 'Matilda'

try {
    const urlParams = new URLSearchParams(window.location.search);
    const modeloParam = urlParams.get('modelo');
    console.log(modeloParam)
    if (modeloParam) {
      modelo = modeloParam; // garante letras minúsculas
    }
  } catch (e) {
    console.warn('Erro ao ler o parâmetro da URL. Usando modelo padrão "matilda".');
  }



// Carregamento do modelo
const loader = new GLTFLoader();
loader.load(`3d/${modelo}.glb`, function (gltf) {
  const model = gltf.scene;

  // Escala padrão (ajuste conforme necessário)
  model.scale.set(1, 1, 1);

  // Adiciona à cena antes de calcular bounds
  scene.add(model);

  // Calcula caixa de limites (bounding box)
  const box = new THREE.Box3().setFromObject(model);
  const size = box.getSize(new THREE.Vector3());
  const center = box.getCenter(new THREE.Vector3());

  // Centraliza o modelo
  model.position.x += (model.position.x - center.x);
  model.position.y += (model.position.y - center.y/6);
  model.position.z += (model.position.z - center.z);

  // Ajusta a câmera com base no tamanho do modelo
  const maxDim = Math.max(size.x, size.y, size.z);
  const fov = camera.fov * (Math.PI / 180);
  const distance = maxDim / (2 * Math.tan(fov / 2));

  camera.position.set(center.x, center.y, center.z + distance * 2);
  camera.near = 0.1;
  camera.far = distance * 10;
  camera.updateProjectionMatrix();

  // Aponta para o centro do modelo
  camera.lookAt(center);
  controls.target.copy(center);
  controls.update();

}, undefined, function (error) {
  console.error('Erro ao carregar o modelo:', error);
});


// Animação
function animate() {
  controls.update();
  renderer.render(scene, camera);
}
renderer.setAnimationLoop(animate);

// Ajusta ao redimensionar a janela
window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});


// Botão de voltar para o menu
const botaoVoltar = document.getElementById('botaovoltar');
if (botaoVoltar) {
  botaoVoltar.addEventListener('click', () => {
    window.location.href = 'index.html';
  });
}
