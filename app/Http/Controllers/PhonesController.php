<?php namespace App\Http\Controllers;

use App\Phone;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PhoneRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

/**
 * Class PhonesController
 * @package App\Http\Controllers
 */
class PhonesController extends Controller {

    /**
     * Constructor
     * set to middleware auth
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created a phone in storage.
     *
     * @param PhoneRequest $request
     * @return Response
     */
	public function store(PhoneRequest $request)
	{
        Phone::create($request->all());
        return redirect('contacts');
	}

	/**
	 * Update the specified phone in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PhoneRequest $request)
	{
        $phone = Phone::findOrFail($id);
        $phone->update($request->all());

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

		$phone = Phone::findOrFail($id);
        $phone->delete();

        return redirect('contacts');
	}

}
