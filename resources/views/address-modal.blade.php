 <!-- Leaflet CSS -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />


 <!-- Modal -->
 <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addressModalLabel">Address Details</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-md-6">
                         <div class="row gx-2">
                             <div class="mb-3 col-sm-6">
                                 <label class="form-label" for="area">Area</label>
                                 <select class="form-select rounded-2 py-3" name="area" id="area"
                                     onchange="updateLeafletMap()">
                                     <option value="">Select your Area ...</option>
                                     @foreach ($areas as $area)
                                         <option value="{{ $area->id }}">{{ $area->name }}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <div class="mb-3 col-sm-6">
                                 <label class="form-label" for="block">Block</label>
                                 <select class="form-select rounded-2 py-3" name="block" id="block"
                                     onchange="updateBlockLeafletMap()">
                                     <option value="">Select your Block ...</option>
                                     @foreach ($blocks as $block)
                                         <option value="{{ $block->id }}">{{ $block->name }}</option>
                                     @endforeach
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
                         <!-- Leaflet Map View -->
                         <div id="leafletMap" tabindex="0"
                             class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                             style="height: 100%; overflow: auto; position: relative; outline-style: none;"> </div>
                         <!-- End Leaflet Map View -->
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button id="saveAddress" type="button" class="btn btn-primary">Save</button>
             </div>
         </div>
     </div>
 </div>

 <!-- Leaflet JavaScript -->
 <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

 <!-- Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Google Maps API with your API Key and callback function set to initGoogleMap -->
 {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8HK1CcG1rrASon918tV61KT-W9I6UAVY&callback=initGoogleMap" async defer></script> --}}


 <!-- Google Maps API with your API Key and callback function set to initGoogleMap -->
 <script>
     // Initialize Leaflet map
     var leafletMap = L.map('leafletMap').setView([29.3759, 47.9774], 10);

     // Add tile layer from OpenStreetMap
     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
     }).addTo(leafletMap);

     // Function to add a default marker on the map
     function addDefaultMarker() {
         // Add a default marker at Kuwait's coordinates
         L.marker([29.3759, 47.9774]).addTo(leafletMap)
             .bindPopup('Kuwait') // Set the popup content
             .openPopup(); // Open the popup by default
     }

     // Call the function to add the default marker when the modal is shown
     $('#addressModal').on('shown.bs.modal', function() {
         setTimeout(function() {
             leafletMap
         .invalidateSize(); // This ensures that Leaflet updates the map size after the modal is fully shown
             addDefaultMarker(); // Add the default marker after the map container size is updated
         }, 100);
     });

     // Function to update Leaflet map location based on area selection
     function updateLeafletMap() {
         var areaId = $('#area').val();

         // AJAX request to fetch area coordinates from the server
         $.ajax({
             url: '/get-area',
             method: 'GET',
             data: {
                 area_id: areaId
             },
             success: function(areaResponse) {
                 if (areaResponse.success) {
                     var areaCoordinates = areaResponse.coordinates;
                     // Set map view to area coordinates
                     leafletMap.setView([areaCoordinates.lat, areaCoordinates.lng], 10);
                     // Clear previous markers
                     leafletMap.eachLayer(function(layer) {
                         if (layer instanceof L.Marker) {
                             leafletMap.removeLayer(layer);
                         }
                     });
                     // Add marker for area to the map
                     L.marker([areaCoordinates.lat, areaCoordinates.lng]).addTo(leafletMap)
                         .bindPopup(areaResponse.area_name)
                         .openPopup();
                 } else {
                     console.error('Failed to fetch area coordinates');
                 }
             },
             error: function(xhr, status, error) {
                 console.error('Error fetching area coordinates:', error);
             }
         });
     }


     // Function to update Leaflet map location based on block selection
     function updateBlockLeafletMap() {
         var blockId = $('#block').val();

         // AJAX request to fetch block coordinates from the server
         $.ajax({
             url: '/get-block',
             method: 'GET',
             data: {
                 block_id: blockId
             },
             success: function(blockResponse) {
                 if (blockResponse.success) {
                     var blockCoordinates = blockResponse.coordinates;
                     // Set map view to block coordinates
                     leafletMap.setView([blockCoordinates.lat, blockCoordinates.lng], 10);
                     // Add marker for block to the map
                     L.marker([blockCoordinates.lat, blockCoordinates.lng]).addTo(leafletMap)
                         .bindPopup(blockResponse.block_name)
                         .openPopup();
                 } else {
                     console.error('Failed to fetch block coordinates');
                 }
             },
             error: function(xhr, status, error) {
                 console.error('Error fetching block coordinates:', error);
             }
         });
     }

     // Update Leaflet map when area selection changes
     $('#area').on('change', function() {
         updateLeafletMap();
     });

     // Update Leaflet map when block selection changes
     $('#block').on('change', function() {
         updateBlockLeafletMap();
     });

     // Ensure map updates initially based on initial selections
     updateLeafletMap();
     updateBlockLeafletMap();
 </script>
