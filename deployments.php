<!DOCTYPE html>
  <html lang="en-us">
    <head>
      <meta charSet="utf-8"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <title data-react-helmet="true">Project Telescope</title>
      <link rel="stylesheet" href="css/patternfly.css" />
      <link rel="stylesheet" href="css/patternfly-addons.css" />
      <link rel="stylesheet" href="css/brands.css" />
      <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
<div class="pf-c-page" id="card-view-example">
  <a
    class="pf-c-skip-to-content pf-c-button pf-m-primary"
    href="#main-content-card-view-example"
  >Skip to content</a>
  <header class="pf-c-page__header">
                <div class="pf-c-page__header-brand">
                  <div class="pf-c-page__header-brand-toggle">
                    <button class="pf-c-button pf-m-plain" type="button" id="page-default-nav-example-nav-toggle" aria-label="Global navigation" aria-expanded="true" data-toggle="collapse" data-target="#mainSideNav" aria-controls="mainSideNav">
                      <i class="fas fa-bars" aria-hidden="true"></i>
                    </button>
                  </div>
                  <a class="pf-c-page__header-brand-link">
                  <img class="pf-c-brand" src="images/telescope-banner4.png" alt="Telescope logo" />
                  </a>
                </div>
                <div class="pf-c-page__header-tools">
                  <div class="pf-c-page__header-tools-group">
                    <div class="pf-c-page__header-tools-item pf-m-hidden pf-m-visible-on-lg">
                      <button class="pf-c-button pf-m-plain" type="button" aria-label="Settings">
                        <i class="fas fa-cog" aria-hidden="true"></i>
                      </button>
                    </div>
                    <div class="pf-c-page__header-tools-item pf-m-hidden pf-m-visible-on-lg">
                      <button class="pf-c-button pf-m-plain" type="button" aria-label="Help">
                        <i class="pf-icon pf-icon-help" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                  <div class="pf-c-page__header-tools-group">
                    <div class="pf-c-page__header-tools-item pf-m-hidden-on-lg">
                      <div class="pf-c-dropdown">
                        <button class="pf-c-dropdown__toggle pf-m-plain" type="button" id="page-default-nav-example-dropdown-kebab-right-aligned-1-button" aria-expanded="false" aria-label="Actions">
                          <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                        </button>
                        <ul class="pf-c-dropdown__menu pf-m-align-right" aria-labelledby="page-default-nav-example-dropdown-kebab-right-aligned-1-button" hidden>
                          <li>
                            <a class="pf-c-dropdown__menu-item" href="#">Link</a>
                          </li>
                          <li>
                            <button class="pf-c-dropdown__menu-item" type="button">Action</button>
                          </li>
                          <li>
                            <button class="pf-c-dropdown__menu-item" type="button" disabled>Disabled action</button>
                          </li>
                          <li class="pf-c-divider" role="separator"></li>
                          <li>
                            <a class="pf-c-dropdown__menu-item" href="#">Separated link</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="pf-c-page__header-tools-item pf-m-hidden pf-m-visible-on-md">
                      <div class="pf-c-dropdown">
                        <button class="pf-c-dropdown__toggle pf-m-plain" type="button" id="page-default-nav-example-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="pf-c-dropdown__toggle-text">Chris Jenkins</span>
                          <span class="pf-c-dropdown__toggle-icon">
                            <i class="fas fa-caret-down" aria-hidden="true"></i>
                          </span>
                        </button>
                        <div class="pf-c-dropdown__menu" aria-labelledby="page-default-nav-example-dropdown-button">[Panel contents here]</div>
                      </div>
                    </div>
                  </div>
                  <img class="pf-c-avatar" src="images/me-cartoon.png" alt="Red Hat logo" />
                </div>
              </header>
  <div class="pf-c-page__sidebar">
    <div class="pf-c-page__sidebar-body">
      <nav
        class="pf-c-nav"
        id="card-view-example-primary-nav"
        aria-label="Global"
      >
        <ul class="pf-c-nav__list">
          <li class="pf-c-nav__item">
            <a
              href="#" class="pf-c-nav__link pf-m-current" aria-current="page" >Namespace Lens</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

    <section class="pf-c-page__main-section pf-m-fill">
    
<table class="pf-c-table pf-m-grid-md" role="grid" aria-label="This is a width modifier expandable" id="table-width-modifiers">
  <thead>
    <tr role="row">

      <th class="pf-m-width-30 pf-c-table__sort pf-m-selected" role="columnheader" aria-sort="ascending" scope="col">
        <button class="pf-c-table__button">
          <div class="pf-c-table__button-content">
            <span class="pf-c-table__text">Namespace</span>
            <span class="pf-c-table__sort-indicator">
              <i class="fas fa-long-arrow-alt-up"></i>
            </span>
          </div>
        </button>
      </th>
      <th class="pf-c-table__sort " role="columnheader" aria-sort="none" scope="col">
        <button class="pf-c-table__button">
          <div class="pf-c-table__button-content">
            <span class="pf-c-table__text">Deployment</span>
            <span class="pf-c-table__sort-indicator">
              <i class="fas fa-arrows-alt-v"></i>
            </span>
          </div>
        </button>
      </th>
      <th class="pf-c-table__sort " role="columnheader" aria-sort="none" scope="col">
        <button class="pf-c-table__button">
          <div class="pf-c-table__button-content">
            <span class="pf-c-table__text">Status</span>
            <span class="pf-c-table__sort-indicator">
              <i class="fas fa-arrows-alt-v"></i>
            </span>
          </div>
        </button>
      </th>
      <th class="pf-m-fit-content " role="columnheader" scope="col">Last Update</th>
    </tr>
  </thead>
  <tbody role="rowgroup">

<?php 
include 'dbconnect.php';
connectDB();

$qq = "select * from telescope group by deployment order by DTG";
$result = mysqli_query($db, $qq);

function putStatus($status) {
if ($status == "0") {
return '<img height=32px width=32px src=images/aperture-green-medium.png>';
} else {
return "<img  height=32px width=32px src=images/aperture-red-closed.png>'";
}

}

foreach ($result as $row) {
print '    <tr role="row">
      <th role="columnheader" data-label="Repository name">
        <div id="table-width-modifiers-node1">' . $row['namespace'] . '</div>
      </th>
      <td role="cell" data-label="Branches">' .$row['deployment'] . '</td>
      <td role="cell" data-label="Pull requests">'. putStatus($row['status']) . '</td>
      <td role="cell" data-label="Workspaces">' . $row['DTG'] . '</td>

    </tr>';

}

?>


    
    
  </tbody>
</table>    
    
    
    </section>
    <section
      class="pf-c-page__main-section pf-m-no-padding pf-m-light pf-m-sticky-bottom pf-m-no-fill"
    >
      
    </section>
  </main>
</div>

      

    <!-- jQuery -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


    <!-- Bootstrap -->
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SlimScroll -->
    <script type="text/javascript" src="/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom Javascript -->
    <script type="text/javascript">
    <!--
      jQuery(document).ready(function() {
        jQuery('.pf-c-page__sidebar-body').slimScroll({
          height: '100%',
          width: 'var(--pf-c-page__sidebar--Width)',
        });
      });
    //-->
    </script>
    
  </body>
</html>