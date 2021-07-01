<?php

namespace App\Admin\Controllers;

use App\Models\ArtistImage;
use App\Models\ArtistUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArtistImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ArtistImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ArtistImage());

        $grid->column('id', __('Id'));
        $grid->column('artist_id', __('ArtistName'))->display(function($artist_id) {
            return ArtistUser::find($artist_id)->name;});
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('img', __('Img'));
        $grid->column('date', __('Date'));
        $grid->column('featured', __('Featured'));
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
        $show = new Show(ArtistImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('artist_id', __('Artist id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('img', __('Img'));
        $show->field('date', __('Date'));
        $show->field('featured', __('Featured'));
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
        $form = new Form(new ArtistImage());
        $form->number('artist_id', __('Artist id'));
        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->image('img', __('Img'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $states = [
            'on'  => ['value' => 'true', 'text' => 'true', 'color' => 'success'],
            'off' => ['value' => 'false', 'text' => 'false', 'color' => 'danger'],
        ];

        $form->switch('featured', __('Featured'))->states($states);

        return $form;
    }
}
