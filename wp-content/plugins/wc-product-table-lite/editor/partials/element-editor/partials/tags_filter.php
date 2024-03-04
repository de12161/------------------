<!-- heading -->
<div class="wcpt-editor-row-option">
  <label>
    Heading
  </label>
  <div
    wcpt-block-editor
    wcpt-model-key="heading"
    wcpt-be-add-row="0"
  ></div>
</div>

<!-- display type -->
<div
  class="wcpt-editor-row-option"
  wcpt-panel-condition="prop"
  wcpt-condition-prop="position"
  wcpt-condition-val="header"
>
  <label>Display type</label>
  <select wcpt-model-key="display_type">
    <option value="dropdown">Dropdown</option>
    <option value="row">Row</option>
  </select>
</div>

<!-- operator -->
<div class="wcpt-editor-row-option">
  <label>Operator</label>
  <select wcpt-model-key="operator">
    <option value="IN">"IN" - each result must have at least one selected term</option>
    <option value="AND">"AND" - each result must have all the selected terms</option>
    <option value="NOT IN">"NOT IN" - each result must have none of the selected terms</option>
  </select>
</div>

<!-- multiple selections permission -->
<div class="wcpt-editor-row-option">
  <label>
    <input type="checkbox" wcpt-model-key="single" />
    Only allow one option to be selected
  </label>
</div>

<!-- heading format upon option selection -->  
<?php require( 'heading_format__op_selected.php' ); ?>

<!-- "Show all" label -->
<div class="wcpt-editor-row-option"
  wcpt-panel-condition="prop"
  wcpt-condition-prop="single"
  wcpt-condition-val="true"
>
  <label>
    "Show All" option label
  </label>
  <div
    wcpt-model-key="show_all_label"
    wcpt-block-editor
    wcpt-be-add-row="0"
  ></div>
</div>

<!-- relabel -->
<div class="wcpt-editor-row-option wcpt-toggle-options wcpt-row-accordion">

  <span class="wcpt-toggle-label">
    Custom tag labels <?php wcpt_pro_badge(); ?>
    <?php echo wcpt_icon('chevron-down'); ?>
  </span>

  <div class="wcpt-editor-loading" data-loading="terms" style="display: none;">
    <?php wcpt_icon('loader', 'wcpt-rotate'); ?> Loading ...
  </div>

  <div
    class="
      wcpt-editor-row-option
      <?php wcpt_pro_cover(); ?>
    "
    wcpt-model-key="relabels"
  >
    <div
      class="wcpt-editor-custom-label-setup"
      wcpt-controller="relabels"
      wcpt-model-key="[]"
      wcpt-model-key-index="0"
      wcpt-row-template="relabel_rule_term_column_element_2"
    >

      <div class="wcpt-tabs">

        <!-- triggers -->
        <div class="wcpt-tab-triggers">
          <div class="wcpt-tab-trigger" wcpt-content-template="term">
            Term name
          </div>
          <div class="wcpt-tab-trigger">
            Style
          </div>
        </div>

        <!-- content: term label -->
        <div class="wcpt-tab-content">
          <div class="wcpt-editor-row-option">
            <div
              wcpt-model-key="label"
              class="wcpt-term-relabel-editor"
              wcpt-block-editor=""
              wcpt-be-add-row="0"
              wcpt-be-add-element-partial="add-term-element-col"
            ></div>
          </div>
        </div>

        <!-- content: term style -->
        <div class="wcpt-tab-content">

          <div class="wcpt-editor-row-option" wcpt-model-key="style">
            <div class="wcpt-editor-row-option" wcpt-model-key="[id]">

              <!-- font color -->
              <div class="wcpt-editor-row-option">
                <label>Font color</label>
                <input type="text" wcpt-model-key="color" placeholder="#000" class="wcpt-color-picker">
              </div>

              <!-- background color -->
              <div class="wcpt-editor-row-option">
                <label>Background color</label>
                <input type="text" wcpt-model-key="background-color" class="wcpt-color-picker">
              </div>

              <!-- border color -->
              <div class="wcpt-editor-row-option">
                <label>Border color</label>
                <input type="text" wcpt-model-key="border-color" class="wcpt-color-picker">
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- exclude terms -->
<div class="wcpt-editor-row-option">
  <label>
    Exclude terms by slug
    <small>Enter one term slug <em>per line</em></small>
  </label>
  <textarea wcpt-model-key="exclude_terms"></textarea>
</div>

<!-- hide empty -->
<div class="wcpt-editor-row-option">
  <label>
    <input type="checkbox" wcpt-model-key="hide_empty"> Hide empty terms (not attached to any product on the site)
  </label>
</div>

<!-- accordion always open -->
<div class="wcpt-editor-row-option">
  <label>
    <input type="checkbox" wcpt-model-key="accordion_always_open"> Keep filter open by default if it is in sidebar
  </label>
</div>

<!-- pre-open depth -->
<div class="wcpt-editor-row-option">
  <label>
    Pre-open sub accordions till depth
  </label>
  <input type="number" wcpt-model-key="pre_open_depth" min="0">
</div>

<!-- enable search -->
<div class="wcpt-editor-row-option">
  <?php wcpt_pro_checkbox('true', 'Enable search box for the filter options', 'search_enabled'); ?>
</div>

<!-- search placeholder -->
<div 
  class="wcpt-editor-row-option"
  wcpt-panel-condition="prop"
  wcpt-condition-prop="search_enabled"
  wcpt-condition-val="true"
>
  <label>Placeholder for the search input box</label>
  <input type="text" wcpt-model-key="search_placeholder">
</div>

<?php include('style/filter.php'); ?>

