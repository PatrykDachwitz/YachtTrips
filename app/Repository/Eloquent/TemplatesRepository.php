<?php

namespace App\Repository\Eloquent;

use App\Models\Template;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TemplatesRepository implements \App\Repository\TemplatesRepository
{
    private $template;
    public function __construct(Template $template) {
        $this->template = $template;
    }

    public function get()
    {
        $this->template->get();
    }

    public function findOrFail(int $id)
    {
        $this->template->findOrFail($id);
    }

    public function update(int $id, array $updateData)
    {
        try {
            $template = $this->template->findOrFail($id);

            $template->name = $updateData['name'] ?? $template->name;
            $template->description = $updateData['description'] ?? $template->description;

            $template->save();
            return $template;
        } catch (ModelNotFoundException) {
            throw new ModelNotFoundException('Model not found');
        } catch (Exception) {
            throw new Exception('Error update model');
        }
    }

    public function create(array $data)
    {
        $template = new $this->template();

        $template->name = $data['name'];
        $template->description = $data['description'];

        $template->save();
        return $template->id;
    }

    public function destroy(int $id)
    {
        $template = $this->template->findOrFail($id);

        if($template->delete()) {
            return true;
        } else {
            return false;
        }
    }
}
