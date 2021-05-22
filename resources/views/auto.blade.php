@extends('layouts.app')

@section('content')
<div class="container-fluid mt--6 pt-4">
<div class="row row mt-5 pt-5">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Авто в системе</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Владелец</th>
                    <th scope="col">Гос. номер</th>
                    <th scope="col">Марка авто</th>
                    <th scope="col">Дата регистрации</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Иванов Петр Сергеевич
                    </th>
                    <td>
                      т459ко 77
                    </td>
                    <td>
                      Lada Vesta 
                    </td>
                    <td>
                      09.08.2020
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Смирнов Алексей Павлович
                    </th>
                    <td>
                      ж331ко 77
                    </td>
                    <td>
                      Mersedes S-200
                    </td>
                    <td>
                      20.06.2020
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Петров Генадий Игоревич
                    </th>
                    <td>
                      т466бв 77
                    </td>
                    <td>
                      Mersedes S-200
                    </td>
                    <td>
                      20.02.2021
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Кушелев Леван Федорович
                    </th>
                    <td>
                      т453уц 77
                    </td>
                    <td>
                      BMW M5
                    </td>
                    <td>
                      19.03.2019
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Будко Анна Васильевна
                    </th>
                    <td>
                      к833ор 77
                    </td>
                    <td>
                      KIA N50
                    </td>
                    <td>
                      12.05.2021
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Крыжовников Юрий Юрьевич
                    </th>
                    <td>
                      тр01ко 77
                    </td>
                    <td>
                      Audi Q4
                    </td>
                    <td>
                      20.11.2020
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Пушкин Игнат Борисович
                    </th>
                    <td>
                      п259ко 77
                    </td>
                    <td>
                      Porche Panamera
                    </td>
                    <td>
                      04.02.2019
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
      </div>
      </div>

      @endsection
