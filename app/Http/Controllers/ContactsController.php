<?php namespace App\Http\Controllers;

use App\Contact;
use App\Phone;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $search = '';
        $column = '';
        if (Input::has('search'))
        {
            $search = Input::get('search');
            $column = Input::get('column');

            if($column === 'phone_number')
            {
                $contacts = Contact::whereHas('phones', function($q) use ($search) {
                    $q->where('phone_number', 'LIKE', "%$search%");
                    })
                    ->orderBy('fname')
                    ->paginate(5);
            }
            else {
                $contacts = Contact::where('user_id', Auth::id())
                    ->where($column, 'LIKE', "%$search%")
                    ->orderBy('fname')
                    ->paginate(5);
            }
        }
        else {
            $contacts = Contact::where('user_id', Auth::id())
                ->orderBy('fname')
                ->paginate(5);
        }
        $tRow = 1;
        return view('contacts.index', compact('contacts', 'search', 'column', 'tRow'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('contacts.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param ContactRequest $request
     * @return Response
     */
	public function store(ContactRequest $request)
	{
        $contact = new Contact($request->all());
        $phone = new Phone($request->all());

        Auth::user()->contacts()->save($contact);

        $contact->phones()->save($phone);

        return redirect('contacts');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $contact = Contact::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $contact->phones->toArray();

        $contact->toArray();

        return view('contacts.show', compact('contact'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $contact = Contact::findOrFail($id);
        $contact->phones()->get();
//        $contact->toArray();
//    dd($contact->phones[0]->id);
        return view('contacts.edit', compact('contact'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param ContactRequest $request
     * @return Response
     */
	public function update($id, ContactRequest $request)
	{
        $contact = Contact::findOrFail($id);
        $input = $request->input('phone_number');
        foreach($input as $key => $phone_number)
        {
            if($phone_number !== '')
            {
                $contact->phones()->where('id', $key)->update(['phone_number' => $phone_number]);
            }
            else $contact->phones()->where('id', $key)->delete();

        }

        $contact->update($request->all());

        return redirect('contacts');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('contacts');
	}

}
