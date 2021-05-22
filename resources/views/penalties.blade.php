@extends('layouts.app')

@section('content')
<div class="container-fluid mt--6 pt-4">
<div class="row row mt-5 pt-5">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Автоштрафы</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Гос. номер</th>
                    <th scope="col">Координата</th>
                    <th scope="col">Скорость максимальная/допустима</th>
                    <th scope="col">Штраф</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      т459ко 77
                    </th>
                    <td>
                      55.7539° N, 37.6208° E
                    </td>
                    <td>
                      85 км/ч | 60 км/ч 
                    </td>
                    <td>
                      4000 рублей
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      б676лм 77
                    </th>
                    <td>
                      55.3439° N, 37.5508° E
                    </td>
                    <td>
                      81 км/ч | 60 км/ч 
                    </td>
                    <td>
                      5500 рублей
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      р740оо 77
                    </th>
                    <td>
                      55.3331° N, 37.8532° E
                    </td>
                    <td>
                      89 км/ч | 60 км/ч 
                    </td>
                    <td>
                      5400 рублей
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      и889цо 77
                    </th>
                    <td>
                      55.7453° N, 37.1389° E
                    </td>
                    <td>
                      82.2 км/ч | 60 км/ч 
                    </td>
                    <td>
                      2500 рублей
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      ы433ва 77
                    </th>
                    <td>
                      55.1249° N, 37.2448° E
                    </td>
                    <td>
                      85.1 км/ч | 60 км/ч 
                    </td>
                    <td>
                      5000 рублей
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
