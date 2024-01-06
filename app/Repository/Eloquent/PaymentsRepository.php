<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\MethodPayment;

class PaymentsRepository implements \App\Repository\PaymentsRepository
{
    private $methodPayment;
    public function __construct(MethodPayment $methodPayment)
    {
        $this->methodPayment = $methodPayment;
    }

    public function getAll()
    {
        return $this->methodPayment->all();
    }

    public function get()
    {
        return $this->methodPayment->paginate(20);
    }

    public function findOrFail(int $id)
    {
        return $this->methodPayment->findOrFail($id);
    }

    public function destroy(int $id)
    {
        return $this->methodPayment
            ->destroy($id);
    }

    public function create(array $data)
    {
        return $this->methodPayment
            ->create($data);
    }

    public function update(int $id, array $updateData)
    {
        $methodPayment = $this->methodPayment->findOrFail($id);

        $methodPayment->update($updateData);

        return $methodPayment->save();
    }
}
