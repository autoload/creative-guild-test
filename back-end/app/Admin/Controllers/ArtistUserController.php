<?php

namespace App\Admin\Controllers;

use App\Models\ArtistUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArtistUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ArtistUser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ArtistUser());

        $grid->column('id', __('Id'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('bio', __('Bio'));
        $grid->column('profile_picture', __('Profile picture'));
        $grid->column('release_at', __('Release at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ArtistUser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('bio', __('Bio'));
        $show->field('profile_picture', __('Profile picture'));
        $show->field('release_at', __('Release at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ArtistUser());

        $form->text('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('bio', __('Bio'));
        $form->image('profile_picture', __('Profile picture'));

        return $form;
    }
}
