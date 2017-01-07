<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Comment extends CI_Controller
{
    // FIXME: Implement middleware.

    /**
     * Autencated user data.
     *
     * @return array
     */
    public $user = [];

    /**
     * Comment constructor
     *
     * @return void.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->library(['session', 'form_validation']);

        $this->user = [];
    }

    /**
     * The comment index. Here will all the comments be handled by the admin's.
     *
     * @see    GET|HEAD:
     * @return Blade view
     */
    public function index()
    {
        // FIXME: Set pagination for the comments.
        // FIXME: Set pagination for the comment reactions.

        $data['title']     = 'Comment module';
        $data['reactions'] = Reactions::all();
        $data['reports']   = CommentReport::all();

        return $this->blade->render('', $data);
    }

    /**
     * Create a comment.
     *
     * @see    POST: http://www.domain.tld/comment/create
     * @return Response | Redirect
     */
    public function create()
    {
        $this->form_validation->set_rules('comment', 'Comment', 'trim|required');

        if ($this->form_validation-run() === false) { // Validation fails.
            $this->session->set_flashdata('class', 'alert alert-danger');
            $this->session->set_flashdata('message', '');
        }

        // Validation passes so we can move on with our logic.
        $input['comment']   = $this->input->post('comment');
        $input['author_id'] = $this->user['id'];

        if (Reaction::create($input)) { // The comment is created.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'The reaction has been created.');
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Report a comment that violates our policy.
     *
     * @see    GET|HEAD: 
     * @return Redirect | Response
     */
    public function report()
    {
        $this->form_validation->set_rules('comment', 'Comment', 'trim|required');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('class', 'alert alert-danger');
            $this->session->set_flashdata('message', '');
        }

        // Validation passes so we can move on with our logic.
        $input['comment']     = $this->input->post0('comment');
        $input['reporter_id'] = $this->user['id'];
        $input['reaction_id'] = Reaction::find($$this->uri->segment(4))->id;

        if (CommentReport::create($input)) { // The comment is reported.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'The comment has been reported.');
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Delete a comment out the system.
     *
     * @see    GET|HEAD: http://www.domain/tld/comment/delete/{id}
     * @return Redirect | Response
     */
    public function delete()
    {
        $commentId = $this->uri->segment(3);

        if (Reaction::find($commentId)->delete()) { // The comment has been deleted.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'The comment has been deleted');
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }
}
