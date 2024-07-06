{{-- -------------------------------------------------Malki -------------------------------------------------------------}}


$validator = Validator::make($request->all(), $rules);
if ($validator->fails()) {
    return redirect()->back()->withErrors($validator)->withInput();
}

$oldUser = session()->get('user');
$user = $oldUser->editDetails(

    $request->input('first_name'),
    $request->input('last_name'),
    $request->input('username'),
    $request->input('email'),
    $request->input('address'),
    $request->input('city'),
    $request->input('country'),
    $request->input('contact_no'),
    $request->input('about')
);

$request->session()->put('user', $user);
return redirect()->route('user.profile');
}

// function for handling user login
public function loginuser(Request $request)
{

$rules = [
    'email' => 'required|string|email|max:255',
    'password' => 'required|string',
];

$validator = Validator::make($request->all(), $rules);
if ($validator->fails()) {
    return redirect()->back()->withErrors($validator)->withInput();
}

//Call login function in user model
$user = new User();
$loggedInUser = $user->login($request->email, $request->password);

if ($loggedInUser) {
    Session::flush();
    $cart = new Cart();
    $cartDetails = $cart->getCart($loggedInUser->id);
    session(['orders' => $cartDetails]);
    $request->session()->put('user', $loggedInUser);
    return redirect()->route('user.profile');
}

return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
}

public function changepassword(Request $request)
{}














































{{-- -------------------------------------------------Dharani -------------------------------------------------------------}}

















































{{-- -------------------------------------------------Lashan -------------------------------------------------------------}}
