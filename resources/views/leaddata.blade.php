<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="container">
                    <h2>Leads</h2>

                    <div class="card border-0 shadow-lg">
                        <div class="card-body">
                            <table class="table table-Striped">
                                    <tr>
                                        <th>Name</th>
                                        <th>Company Name</th>
                                        <th>Title</th>
                                        <th>Industry Domain</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Person LinkedIn</th>
                                        <th>Domain LinkedIn</th>
                                    </tr>

                                    @foreach($leads as $lead)
                                        <tr>
                                            <td>{{ $lead['name']}}</td>
                                            <td>{{ $lead['company_name']}}</td>
                                            <td>{{ $lead['title']}}</td>
                                            <td>{{ $lead['industry_domain']}}</td>
                                            <td>{{ $lead['country']}}</td>
                                            <td>{{ $lead['state']}}</td>
                                            <td>{{ $lead['city']}}</td>
                                            <td>{{ $lead['email']}}</td>
                                            <td>{{ $lead['mobile_no']}}</td>
                                            <td>{{ $lead['person_linkedin']}}</td>
                                            <td>{{ $lead['domain_linkedin']}}</td>
                                        
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
