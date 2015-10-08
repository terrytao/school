<script type="text/javascript">
    jQuery(function ($) {
        var sampleData = initiateDemoData();//see below


        $('#courseTree').ace_tree({
            dataSource: sampleData['dataSource1'],
            multiSelect: true,
            cacheItems: true,
            'open-icon': 'ace-icon tree-minus',
            'close-icon': 'ace-icon tree-plus',
            'selectable': true,
            'selected-icon': 'ace-icon fa fa-check',
            'unselected-icon': 'ace-icon fa fa-times',
            loadingHTML: '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
        });

        $('#tree2').ace_tree({
            dataSource: sampleData['dataSource2'],
            loadingHTML: '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
            'open-icon': 'ace-icon fa fa-folder-open',
            'close-icon': 'ace-icon fa fa-folder',
            'selectable': false,
            multiSelect: false,
            'selected-icon': null,
            'unselected-icon': null
        });


        //please refer to docs for more info
        $('#courseTree')
            .on('loaded.fu.tree', function (e) {
                // alert ("load");
            })
            .on('updated.fu.tree', function (e, result) {
            })

            .on('selected.fu.tree', function (e) {
                //  $('#schoolContainer').html("hi");
                var i;
                var majors = "";

                var items = $('#courseTree').tree('selectedItems');

                for (i = 0; i < items.length; i++) {
                    majors += items[i].text + ",";


                }

                var province = $('.filterProvince').filter(':checked').val()


                var majorId = $('#selectedMajor').val();
                var is211 = $('#isTwoEleven').is(':checked');
                var is985 = $('#isNineEightFive').is(':checked');
                if (is211) {
                    is211 = "1";
                } else {
                    is211 = 0;
                }
                if (is985) {
                    is985 = "1";
                } else {
                    is985 = 0;
                }
                console.log(province);
                // var realMajorId = majorId.replace("major_", "");
                var postData = {'majors': majors, province: province, is985: is985, is211: is211};


                // $.post('/job/ajax-publish-to-students', postData, function (data) {
                $.post('/job/ajax-publish-to-schools', postData, function (data) {
                    $('#schoolContainer').html(data.schools);
                    $('#schoolFilterContainer').html(data.filter);
                    //   $('#studentContainer').html(data.students);

                }, 'json');


            })
            .on('deselected.fu.tree', function (e) {
                var i;
                var majors = "";

                var items = $('#courseTree').tree('selectedItems');

                for (i = 0; i < items.length; i++) {
                    majors += items[i].text + ",";


                }

                //  alert(majors);
            })
            .on('opened.fu.tree', function (e) {
                //  alert ('open');
            })
            .on('closed.fu.tree', function (e) {
                //  alert ('closed');
            });


        function initiateDemoData() {
            var tree_data = {
                'science': {text: '理学', type: 'folder'},
                'vehicles': {text: '工学', type: 'folder'},
                'rentals': {text: '工学2', type: 'folder'},
                'real-estate': {text: '农学', type: 'folder'},
                'a': {text: '医学', type: 'folder'},
                'b': {text: '经济学', type: 'folder'},
                'c': {text: '管理学', type: 'folder'},
                'd': {text: '文学', type: 'folder'},
                'e': {text: '艺术学', type: 'folder'},
                'f': {text: '教育学', type: 'folder'},
                'g': {text: '法学', type: 'folder'},
                'h': {text: '哲学', type: 'folder'},
                'i': {text: '经济学', type: 'folder'},
                'j': {text: '管理学', type: 'folder'},
                'k': {text: '文学', type: 'folder'},
                'l': {text: '艺术学', type: 'folder'},
                'm': {text: '教育学', type: 'folder'},
                'n': {text: '法学', type: 'folder'},
                'o': {text: '哲学', type: 'folder'},

                'pets': {text: 'Pets', type: 'folder'},
                'tickets': {text: 'Tickets', type: 'item'},
                'services': {text: 'Services', type: 'item'},
                'personals': {text: 'Personals', type: 'item'}
            }
            tree_data['science']['additionalParameters'] = {
                'children': {
                    'math': {text: '数学类', type: 'folder'},
                    'arts-crafts': {text: '物理学类', type: 'item'},
                    'clothing': {text: '化学类', type: 'item'},
                    'computers': {text: 'Computers', type: 'item'},
                    'jewelry': {text: 'Jewelry', type: 'item'},
                    'office-business': {text: 'Office & Business', type: 'item'},
                    'sports-fitness': {text: 'Sports & Fitness', type: 'item'}
                }
            }
            tree_data['vehicles']['additionalParameters'] = {
                'children': {
                    'cars': {text: 'Cars', type: 'folder'},
                    'motorcycles': {text: 'Motorcycles', type: 'item'},
                    'boats': {text: 'Boats', type: 'item'}
                }
            }
            tree_data['science']['additionalParameters']['children']['math']['additionalParameters'] = {
                'children': {
                    'apply-math': {text: '数学与应用数学', type: 'item'},
                    'convertibles': {text: 'Convertibles', type: 'item'},
                    'coupes': {text: 'Coupes', type: 'item'},
                    'hatchbacks': {text: 'Hatchbacks', type: 'item'},
                    'hybrids': {text: 'Hybrids', type: 'item'},
                    'suvs': {text: 'SUVs', type: 'item'},
                    'sedans': {text: 'Sedans', type: 'item'},
                    'trucks': {text: 'Trucks', type: 'item'}
                }
            }

            tree_data['rentals']['additionalParameters'] = {
                'children': {
                    'apartments-rentals': {text: 'Apartments', type: 'item'},
                    'office-space-rentals': {text: 'Office Space', type: 'item'},
                    'vacation-rentals': {text: 'Vacation Rentals', type: 'item'}
                }
            }
            tree_data['real-estate']['additionalParameters'] = {
                'children': {
                    'apartments': {text: 'Apartments', type: 'item'},
                    'villas': {text: 'Villas', type: 'item'},
                    'plots': {text: 'Plots', type: 'item'}
                }
            }
            tree_data['pets']['additionalParameters'] = {
                'children': {
                    'cats': {text: 'Cats', type: 'item'},
                    'dogs': {text: 'Dogs', type: 'item'},
                    'horses': {text: 'Horses', type: 'item'},
                    'reptiles': {text: 'Reptiles', type: 'item'}
                }
            }

            var dataSource1 = function (options, callback) {
                var $data = null
                if (!("text" in options) && !("type" in options)) {
                    $data = tree_data;//the root tree
                    callback({data: $data});
                    return;
                }
                else if ("type" in options && options.type == "folder") {
                    if ("additionalParameters" in options && "children" in options.additionalParameters)
                        $data = options.additionalParameters.children || {};
                    else $data = {}//no data
                }

                if ($data != null)//this setTimeout is only for mimicking some random delay
                    setTimeout(function () {
                        callback({data: $data});
                    }, parseInt(Math.random() * 500) + 200);

                //we have used static data here
                //but you can retrieve your data dynamically from a server using ajax call
                //checkout examples/treeview.html and examples/treeview.js for more info
            }


            var tree_data_2 = {
                'pictures': {text: 'Pictures', type: 'folder', 'icon-class': 'red'},
                'music': {text: 'Music', type: 'folder', 'icon-class': 'orange'},
                'video': {text: 'Video', type: 'folder', 'icon-class': 'blue'},
                'documents': {text: 'Documents', type: 'folder', 'icon-class': 'green'},
                'backup': {text: 'Backup', type: 'folder'},
                'readme': {text: '<i class="ace-icon fa fa-file-text grey"></i> ReadMe.txt', type: 'item'},
                'manual': {text: '<i class="ace-icon fa fa-book blue"></i> Manual.html', type: 'item'}
            }
            tree_data_2['music']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-music blue"></i> song1.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song2.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song3.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song4.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song5.ogg', type: 'item'}
                ]
            }
            tree_data_2['video']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie1.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie2.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie3.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie4.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie5.avi', type: 'item'}
                ]
            }
            tree_data_2['pictures']['additionalParameters'] = {
                'children': {
                    'wallpapers': {text: 'Wallpapers', type: 'folder', 'icon-class': 'pink'},
                    'camera': {text: 'Camera', type: 'folder', 'icon-class': 'pink'}
                }
            }
            tree_data_2['pictures']['additionalParameters']['children']['wallpapers']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper1.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper2.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper3.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper4.jpg', type: 'item'}
                ]
            }
            tree_data_2['pictures']['additionalParameters']['children']['camera']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
                ]
            }


            tree_data_2['documents']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-file-text red"></i> document1.pdf', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text grey"></i> document2.doc', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text grey"></i> document3.doc', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text red"></i> document4.pdf', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text grey"></i> document5.doc', type: 'item'}
                ]
            }

            tree_data_2['backup']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup1.zip', type: 'item'},
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup2.zip', type: 'item'},
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup3.zip', type: 'item'},
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup4.zip', type: 'item'}
                ]
            }
            var dataSource2 = function (options, callback) {
                var $data = null
                if (!("text" in options) && !("type" in options)) {
                    $data = tree_data_2;//the root tree
                    callback({data: $data});
                    return;
                }
                else if ("type" in options && options.type == "folder") {
                    if ("additionalParameters" in options && "children" in options.additionalParameters)
                        $data = options.additionalParameters.children || {};
                    else $data = {}//no data
                }

                if ($data != null)//this setTimeout is only for mimicking some random delay
                    setTimeout(function () {
                        callback({data: $data});
                    }, parseInt(Math.random() * 500) + 200);

                //we have used static data here
                //but you can retrieve your data dynamically from a server using ajax call
                //checkout examples/treeview.html and examples/treeview.js for more info
            }


            return {'dataSource1': dataSource1, 'dataSource2': dataSource2}
        }

    });
</script>