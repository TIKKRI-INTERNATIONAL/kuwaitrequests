<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Address Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="area">Area</label>
                                <select class="form-select rounded-2 py-3" name="area" id="area">
                                    <option value="">Select your Area ...</option>
                                    <option value="Salmiya">Salmiya</option>
                                    <option value="Kuwait City">Kuwait City</option>
                                    <option value="Hawally">Hawally</option>
                                </select>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="block">Block</label>
                                <select class="form-select rounded-2 py-3" name="block" id="block">
                                    <option value="">Select your Block ...</option>
                                    <option value="Block 1">Block 1</option>
                                    <option value="Block 2">Block 2</option>
                                    <option value="Block 3">Block 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="street">Street</label>
                            <input class="form-control rounded-2 py-3" type="text" name="street"
                                placeholder="Street" id="street">
                        </div>

                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="building">Building Number or Name</label>
                                <input class="form-control rounded-2 py-3" type="text" name="building"
                                    placeholder="Building Number or Name" id="building">
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="jedda">Jedda</label>
                                <input class="form-control rounded-2 py-3" type="text" name="jedda"
                                    placeholder="Jedda" id="jedda">
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="apartment">Apartment / Office</label>
                                <input class="form-control rounded-2 py-3" type="text" name="apartment"
                                    placeholder="Apartment or Office" id="apartment">
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="floor">Floor</label>
                                <input class="form-control rounded-2 py-3" type="text" name="floor"
                                    placeholder="Floor" id="floor">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Google Map View -->
                        <div id="googleMap" style="height: 400px;"></div>
                        <!-- End Google Map View -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    // Initialize Leaflet map
    var map = L.map('map').setView([29.3759, 47.9774], 10);

    // Add tile layer from OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add marker for Kuwait
    L.marker([29.3759, 47.9774]).addTo(map)
        .bindPopup('Kuwait')
        .openPopup();
</script>

<!-- Google Maps API with your API Key and callback function set to initKuwaitMap -->
<script>
    // Initialize Google map
    function initGoogleMap() {
        var googleMapOptions = {
            center: { lat: 29.3759, lng: 47.9774 },
            zoom: 8
        };
        var googleMap = new google.maps.Map(document.getElementById('googleMap'), googleMapOptions);

        // Add marker for Kuwait
        var marker = new google.maps.Marker({
            position: { lat: 29.3759, lng: 47.9774 },
            map: googleMap,
            title: 'Kuwait'
        });
    }

    // Call initGoogleMap function after the modal is shown
    $('#addressModal').on('shown.bs.modal', function () {
        initGoogleMap();
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initGoogleMap" async defer></script>

