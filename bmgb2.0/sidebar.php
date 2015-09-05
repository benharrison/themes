            <div id="sidebar">
                <div class="padded">
                    <ul class="group">
                        <?php if ( function_exists("dynamic_sidebar") && dynamic_sidebar() ) : else : ?>
                        <?php wp_list_pages("title_li=<h3>Pages</h3>"); ?>
                        
                        <li><h3>Categories</h3>
                            <ul>
                                <?php wp_list_cats("sort_column=name&optioncount=1&hierarchical=0"); ?>
                            </ul>
                        </li>
                        
                        <li><h3>Archives</h3>
                            <ul>
                                <?php wp_get_archives("type=monthly"); ?>
                            </ul>
                        </li>
                        
                        <?php wp_list_bookmarks("title_before=<h3>&title_after=</h3>"); ?>
                        <?php endif; ?>
                    </ul>
                    &nbsp;
                </div>
            </div>
