<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Users extends CI_Controller
{
    /**
     * Users constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Check the routes against middleware.
     *
     * only create if you want to use, not compulsory.
     * or return parent::middleware(); if you want to keep.
     * or return empty array() and no middleware will run.
     *
     * @return array
     */
    protected function middleware()
    {
        /**
         * Return the list of middlewares you want to be applied,
         * Here is list of some valid options
         *
         * admin_auth                    // As used below, simplest, will be applied to all
         * someother|except:index,list   // This will be only applied to posts()
         * yet_another_one|only:index    // This will be only applied to index()
         **/
        return [];
    }

    /**
     * Show the index for the user management system.
     *
     *
     */
    public function index()
    {
        $data['title'] = 'user management';
        $data['users'] = Auth::all(); // FIXME: Set CI pagination.

        return $this->blade->render('users/index', $data);
    }

    /**
     * Delete a user in the system.
     *
     * @return response
     */
    public function destroy()
    {
        $userId = $this->uri->segment(3);

        if (Auth::destroy($userId)) { // The user is deleted.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'The user is deleted'));
        }
    }

    /**
     * Block or Unblock the user in the system.
     *
     * @see
     * @return
     */
    public function status()
    {
        $userId = $this->uri->segment(3);
        $status = $this->uri->segment(4);

        if (Auth::find($userId)->update(['blocked' => $status])) { // The user is updated.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'De user status has been updated');
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Register view for creating a new user in the system.
     *
     * @see     http://www.domain.tld/users/create
     * @return  Blade view
     */
    public function create()
    {
        $data['title'] = 'Register new user';
        return $this->blade->render('users/create', $data);
    }

    /**
     * Create a new user in the system.
     *
     * @see     http://www.domain.tld/users/register
     * @return  redirect|response
     */
    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) { // Form validation fails.
            $data['title'] = '';
            return $this->blade->render('users/create', $data);
        } else { // Validation passes
            $input['name']      = $this->input->post('name');
            $input['username']  = $this->input->post('username');
            $input['email']     = $this->input->post('email');
            $input['password']  = md5($this->input->post('password'));
            $input['blocked']   = 0;

            $user['create'] = Auth::create($input);

            $permission['find']  = Permission::where('name', 'access_guest')->first();
            $permission['grant'] = Auth::find($user['create']->id)->permissions()->attach($permission['grant']->id);

            if ($user['create'] && $permission['grant']) { // The user is created.
                $this->session->set_flashdata('class', 'alert alert-success');
                $this->session->set_flashdata('message', 'The user is created');
            }
        }

        return redirect($_SERVER['HTTP_REFERER']):
    }
}
