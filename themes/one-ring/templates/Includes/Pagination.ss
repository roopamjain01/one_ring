<!-- BEGIN PAGINATION -->
<% if $Results.MoreThanOnePage %>
<div class="pagination">
    <% if $Results.NotFirstPage %>
    <ul id="previous col-xs-6">
        <li><a href="$Results.PrevLink"><i class="fa fa-chevron-left"></i></a></li>
    </ul>
    <% end_if %>
    <ul class="hidden-xs">
	    <% loop $Results.PaginationSummary %>
	        <% if $Link %>
	            <li <% if $CurrentBool %>class="active"<% end_if %>><a href="$Link">$PageNum</a></li>
	        <% else %>
	            <li>...</li>
	        <% end_if %>
	    <% end_loop %>
	</ul>
	<% if $Results.NotLastPage %>
    <ul id="next col-xs-6">
        <li><a href="$Results.NextLink"><i class="fa fa-chevron-right"></i></a></li>
    </ul>
    <% end_if %>
</div>
<% end_if %>
<!-- END PAGINATION -->
