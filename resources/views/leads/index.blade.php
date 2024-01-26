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

                    <form action="{{ route('leads.index') }}" method="GET">
                        <input type="text" name="name" placeholder="Search by Name">
                        <button type="submit">Search</button>
                    </form>

                    <form action="{{ route('leads.index') }}" method="GET">
                        <input type="text" name="company_name" placeholder="Search by Company Name">
                        <button type="submit">Search</button>
                    </form>

                    <form action="{{ route('leads.index') }}" method="GET">
                        <input type="text" name="title" placeholder="Search by Job Title">
                        <button type="submit">Search</button>
                    </form>

                    <form action="{{ route('leads.index') }}" method="GET">
                        <h3>
                        <select name="industry_domain">
                            <option selected>Search by Industry Name</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Airlines/aviation">Airlines/aviation</option>
                            <option value="Apparel & fashion">Apparel & fashion</option>
                            <option value="Architecture & planning">Architecture & planning</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Aviation & aerospace">Aviation & aerospace</option>
                            <option value="Banking">Banking</option>
                            <option value="Biotechnology">Biotechnology</option>
                            <option value="Broadcast media">Broadcast media</option>
                            <option value="Building material">Building material</option>
                            <option value="Business supplies & equipment">Business supplies & equipment</option>
                            <option value="Chemicals">Chemicals</option>
                            <option value="Civic & social organisation">Civic & social organisation</option>
                            <option value="Civil engineering">Civil engineering</option>
                            <option value="Computer Networking">Computer Networking</option>
                            <option value="Computer Software">Computer Software</option>
                            <option value="Construction">Construction</option>
                            <option value="Consumer electronics">Consumer electronics</option>
                            <option value="Consumer goods">Consumer goods</option>
                            <option value="Consumer services">Consumer services</option>
                            <option value="Cosmetics">Cosmetics</option>
                            <option value="Defence & space">Defence & space</option>
                            <option value="Depository Institutions, Financial Services">Depository Institutions, Financial Services</option>
                            <option value="Design">Design</option>
                            <option value="Education management">Education management</option>
                            <option value="Electrical/electronic manufacturing">Electrical/electronic manufacturing</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Environmental services & clean energy">Environmental services & clean energy</option>
                            <option value="Events services">Events services</option>
                            <option value="Facilities & services">Facilities & services</option>
                            <option value="Finance">Finance</option>
                            <option value="Financial Services">Financial Services</option>
                            <option value="Food & beverages">Food & beverages</option>
                            <option value="Food production">Food production</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Government administration">Government administration</option>
                            <option value="Grocery Stores, Retail">Grocery Stores, Retail</option>
                            <option value="Health, wellness & fitness">Health, wellness & fitness</option>
                            <option value="Higher education">Higher education</option>
                            <option value="Hospital & health care">Hospital & health care</option>
                            <option value="Hospitality">Hospitality</option>
                            <option value="Human resources">Human resources</option>
                            <option value="Individual & family services">Individual & family services</option>
                            <option value="Industrial automation">Industrial automation</option>
                            <option value="Information technology & services">Information technology & services</option>
                            <option value="Information Technology and Services">Information Technology and Services</option>
                            <option value="Insurance">Insurance</option>
                            <option value="International trade & development">International trade & development</option>
                            <option value="Internet">Internet</option>
                            <option value="Investment management">Investment management</option>
                            <option value="Law practice">Law practice</option>
                            <option value="Legal services">Legal services</option>
                            <option value="Leisure, travel & tourism">Leisure, travel & tourism</option>
                            <option value="Life Insurance, Insurance">Life Insurance, Insurance</option>
                            <option value="Logistics & supply chain">Logistics & supply chain</option>
                            <option value="Machinery">Machinery</option>
                            <option value="Management consulting">Management consulting</option>
                            <option value="Maritime">Maritime</option>
                            <option value="Marketing & advertising">Marketing & advertising</option>
                            <option value="Marketing and Advertising">Marketing and Advertising</option>
                            <option value="Mechanical or industrial engineering">Mechanical or industrial engineering</option>
                            <option value="Media production">Media production</option>
                            <option value="Medical devices">Medical devices</option>
                            <option value="Military">Military</option>
                            <option value="Mining & metals">Mining & metals</option>
                            <option value="Motor Vehicles And Car Bodies, Automotive">Motor Vehicles And Car Bodies, Automotive</option>
                            <option value="Non-profits & non-profit services">Non-profits & non-profit services</option>
                            <option value="Oil & energy">Oil & energy</option>
                            <option value="Outsourcing/offshoring">Outsourcing/offshoring</option>
                            <option value="Packaging & containers">Packaging & containers</option>
                            <option value="Pharmaceuticals">Pharmaceuticals</option>
                            <option value="Photography">Photography</option>
                            <option value="Prepackaged Software, Computer Sofare">Prepackaged Software, Computer Sofare</option>
                            <option value="Prepackaged Software, Information Technology And Services">Prepackaged Software, Information Technology And Services</option>
                            <option value="Primary/secondary education">Primary/secondary education</option>
                            <option value="Printing">Printing</option>
                            <option value="Professional training & coaching">Professional training & coaching</option>
                            <option value="Publishing">Publishing</option>
                            <option value="Real estate">Real estate</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Religious institutions">Religious institutions</option>
                            <option value="Research">Research</option>
                            <option value="Restaurants">Restaurants</option>
                            <option value="Retail">Retail</option>
                            <option value="Security & investigations">Security & investigations</option>
                            <option value="Semiconductors">Semiconductors</option>
                            <option value="Sporting goods">Sporting goods</option>
                            <option value="Sports">Sports</option>
                            <option value="Staffing & recruiting">Staffing & recruiting</option>
                            <option value="Telecommunications">Telecommunications</option>
                            <option value="Textiles">Textiles</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Transportation Equipment, Defense & Spite">Transportation Equipment, Defense & Spite</option>
                            <option value="Utilities">Utilities</option>
                            <option value="Wholesale">Wholesale</option>
                        </select>
                        <button type="submit">Search</button>
                    </form>
                </div>
                
                <div class="container">
                    <h1>Leads</h1>

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

                                    @foreach($filteredLeads as $lead)
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