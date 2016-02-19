<?php
namespace SimpleSlider\Controller;

use SimpleSlider\Controller\AppController;

/**
 * Slides Controller
 *
 * @property \SimpleSlider\Model\Table\SlidesTable $Slides
 */
class SlidesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sliders']
        ];
        $slides = $this->paginate($this->Slides);

        $this->set(compact('slides'));
        $this->set('_serialize', ['slides']);
    }

    /**
     * View method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => ['Sliders']
        ]);

        $this->set('slide', $slide);
        $this->set('_serialize', ['slide']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slide = $this->Slides->newEntity();
        if ($this->request->is('post')) {
            $slide = $this->Slides->patchEntity($slide, $this->request->data);
            if ($this->Slides->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The slide could not be saved. Please, try again.'));
            }
        }
        $sliders = $this->Slides->Sliders->find('list', ['limit' => 200]);
        $this->set(compact('slide', 'sliders'));
        $this->set('_serialize', ['slide']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slide = $this->Slides->patchEntity($slide, $this->request->data);
            if ($this->Slides->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The slide could not be saved. Please, try again.'));
            }
        }
        $sliders = $this->Slides->Sliders->find('list', ['limit' => 200]);
        $this->set(compact('slide', 'sliders'));
        $this->set('_serialize', ['slide']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slides->get($id);
        if ($this->Slides->delete($slide)) {
            $this->Flash->success(__('The slide has been deleted.'));
        } else {
            $this->Flash->error(__('The slide could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
