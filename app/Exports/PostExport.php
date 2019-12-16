<?php
namespace App\Exports;
use App\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
class PostExport implements FromCollection
{
  public function collection()
  {
    return Client::all();
  }
}