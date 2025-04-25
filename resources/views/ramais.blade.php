@extends('layouts.app')
@section('title', 'Relação de Ramais')
@section('content')
<link rel="stylesheet" href="{{ asset('css/ramais.css') }}">


    <h2>Relação de Ramais </h2>
    <div class="container mt-5">
    <h5 class="text-center mb-4">
    FUNDAÇÃO DE AMPARO A PESQUISA DO ESTADO DO AMAZONAS - FAPEAM <br>
    RELAÇÃO DE RAMAIS - 2020</h5>
        <div class="table-responsive custom-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Setores</th>
                        <th>Número 3878-XXXX</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Central Telefônica (Recepção)</td>
                        <td>4000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Arquivo - NUAQ</td>
                        <td>4046</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Contabilidade - NUCB</td>
                        <td>4037</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Contrato - NUCT</td>
                        <td>4038</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Convênios - NUCV</td>
                        <td>4006</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Diretoria Administrativo-Financeira – DAF</td>
                        <td>4015</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Departamento de Acompanhamento e Avaliação - DEAC</td>
                        <td>4024/4031</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Departamento de Análise de Projetos – DEAP</td>
                        <td>4012/4019</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Departamento de Comunicação e Difusão do Conhecimento - DECON</td>
                        <td>4011</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Departamento de Operações e Fomento - DEOF</td>
                        <td>4016</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Diretoria Técnico-Científica – DITEC</td>
                        <td>4005</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>GABINETE</td>
                        <td>4013</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Gerência de Apoio Logístico - GEAL</td>
                        <td>4003</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>PSICOSSOCIAL</td>
                        <td>4009</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Gerência Financeira – GEFI</td>
                        <td>4004</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Gerência de Informática – GEINF</td>
                        <td>4017/4027</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Gerência de Orçamento - GEOR</td>
                        <td>4021</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Gerência de Gestão de Pessoal – GEPE</td>
                        <td>4022</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Jurídico - ASJUR</td>
                        <td>4018</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Patrimônio - NUPA</td>
                        <td>4040</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Jurídico - ASJUR</td>
                        <td>4010</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Sec. Conselhos</td>
                        <td>4045</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Ouvidoria</td>
                        <td>4041</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Unidade de Controle Interno - UCI</td>
                        <td>4035</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Assessoria da Presidência</td>
                        <td>4047</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Departamento de Planejamento e Avaliação Institucional</td>
                        <td>4048</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Departamento de Compliance - DEPLIANCE</td>
                        <td>4007</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
@endsection
