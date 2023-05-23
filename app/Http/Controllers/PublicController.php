<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    
    public $products = [

        [
            'id' => 1,
            'title' => 'Apple iPad (9^gen.) 10.2 Wi-Fi 64GB - Grigio siderale',
            'category' => 'eBook reader e Tablet',
            'price' => '€ 339,00',
             'url' => '/media/prodotto1.jpg'
            

        ],

        [
            'id' => 2,
            'title' => 'Apple AirPods con custodia di ricarica (seconda generazione 2019)',
            'category' => 'CUFFIE E AURICOLARI',
            'price' => '€ 119,00',
            'url' => '/media/prodotto2.jpg'
        ],

        [
            'id' => 3,
            'title' => "Samsung Galaxy S23 Ultra Display 6.8'' Dynamic AMOLED 2X, Fotocamera 200MP, RAM 8GB, 256GB, 5.000 mAh, Phantom Black",
            'category' => 'Smartphone e cellulari',
            'price' => '€ 1.399,00',
            'url' => '/media/prodotto3.jpg'
        ],

    ];


 public function home() {
        return view('welcome');
    }

    public function products() {
        return view('products', ['products' => $this->products]);
    }

    public function contact_us() {
        return view('contact');
    }


    public function detail($id) {
        foreach ($this->products as $product) {
            if($product['id'] == $id){
               
                return view('product_detail', compact('product'));
        }
            
    }

}
public function send(Request $request){
    
    $user = $request->user;
    $email = $request->email;
    $body = $request->body;

    $finalMail = new ContactMail($user, $email, $body);


    Mail::to($email)->send($finalMail);

    return redirect(route('contact-us') )->with('message', 'Mail inviata correttamente');

}



}

