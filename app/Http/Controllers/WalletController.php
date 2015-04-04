class WallController extends Controller {
public function buy()
{
$client = Registered_Client::all();
return \View::make('index')->with('client',$client);
}


}