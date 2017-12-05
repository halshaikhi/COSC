<?php

class Reports extends Controller {
    public function students() {
		 $this->view('reports/students');    
    }
    public function admin() {
        $this->view('reports/admin');
    }
	public function joins() {
        $this->view('reports/joins');
}