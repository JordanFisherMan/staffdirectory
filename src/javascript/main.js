$(function() {
    $('#js-search').on("change paste keyup", function() {
        $.ajax({
            type: "GET",
            url: 'livesearch.php',
            data: {
                search: $(this).val(),
                field: $('#js-field-select').children("option:selected").val()
            },
            success: function(response) {
                var jsonData = JSON.parse(response);
                  var staffMembers = $('#js-staff-members');
                  staffMembers.html('');
                  if (jsonData.length == 0){
                    staffMembers.html('No Results.');
                  } else {
                    $.each(jsonData, function(index, member){
                      var staffMember = $('<div class="staff-member"></div>');
                      var staffMemberPrimary = $('<div class="staff-member__primary"></div>');
                      var staffMemberPhoto = $('<img src="' + member['photo_path'] + '" alt="" class="staff-member__photo">');
                      var staffMemberSecondary = $('<div class="staff-member__secondary"></div>');
                      var staffMemberName = $('<h2 class="staff-member__name">' + member['name'] + '</h2>');
                      var staffMemberDepartment = $('<h2 class="staff-member__department">' + member['department'] + '</h2>');
                      var staffMemberDescription = $('<p class="staff-member__description">' + member['description'] + '</p>');
                      var hr = $('<hr>');

                      staffMember.append(staffMemberPrimary);
                      staffMemberPrimary.append(staffMemberPhoto);
                      staffMember.append(staffMemberSecondary);
                      staffMemberSecondary.append(staffMemberName);
                      staffMemberSecondary.append(staffMemberDepartment);
                      staffMemberSecondary.append(staffMemberDescription);
                      staffMembers.append(staffMember);
                      staffMembers.append(hr);
                    });
                  }

            }

        });
    });



});
