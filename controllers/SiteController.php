<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'PHP MVC'
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost()) {
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}