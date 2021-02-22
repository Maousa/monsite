</div><!-- /.container -->
    <footer class="blog-footer">
        <div class="footer-li">
            <h3 class="title-footer">Legales</h3>
            <ul>
                <li>Mentions légales</li>
                <li>Rgpd</li>
                <li>Cgu</li>
                <li>Sitemap</li>
            </ul>
        </div>
        <div class="footer-li">
            <h3 class="title-footer">Explorer</h3>
            <ul>
                <li>Nos partenaires</li>
                <li>Carrière</li>
                <li>Se desinscrire</li>
                <li>FAQ</li>
            </ul>
        </div>
        <div class="footer-li">
        <h3 class="title-footer">Nous suivre</h3>
        <ul>
            <li>Facebook</li>
            <li>LinkdIn</li>
        </ul>
        </div>
    </footer>
    <!-- JavaScript de Bootstrap et jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Chart code -->
    <script>
        am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_kelly);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.PieChart);

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "litres";
        pieSeries.dataFields.category = "country";

        // Let's cut a hole in our Pie chart the size of 30% the radius
        chart.innerRadius = am4core.percent(30);

        // Put a thick white border around each Slice
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeWidth = 2;
        pieSeries.slices.template.strokeOpacity = 1;
        pieSeries.slices.template
        // change the cursor on hover to make it apparent the object can be interacted with
        .cursorOverStyle = [
            {
            "property": "cursor",
            "value": "pointer"
            }
        ];

        // pieSeries.alignLabels = false;
        // pieSeries.labels.template.bent = true;
        // pieSeries.labels.template.radius = 3;
        // pieSeries.labels.template.padding(0,0,0,0);

        pieSeries.ticks.template.disabled = true;

        // Create a base filter effect (as if it's not there) for the hover to return to
        var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
        shadow.opacity = 0;

        // Create hover state
        var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

        // Slightly shift the shadow and make it more prominent on hover
        var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
        hoverShadow.opacity = 0.7;
        hoverShadow.blur = 5;

        // Add a legend
        chart.legend = new am4charts.Legend();

        chart.data = [{
        "country": "Programs",
        "litres": 93
        },{
        "country": "fundraising",
        "litres": 3
        }, {
        "country": "Administration",
        "litres": 4
        }];

        }); // end am4core.ready()
    </script>
    <?php wp_footer(); ?>
</body>
</html>