<!--<div><div class="Overlay_container__1owmA" style="opacity: 1;"><div><div class="Overlay_overlay__2YOqK" style="opacity: 1;"></div></div></div></div>-->
<div id="headerr" class="Header_drawer__iQn1p global-drawer">
        <div id="close" class="pb-4 text-right"><span class="p-4 inline-block -mr-5 -mt-4"><svg aria-hidden="true"
                    focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 "
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                    <path fill="currentColor"
                        d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                    </path>
                </svg></span></div>
        <div class="Header_link-section__1JFc9 global-link-section"><a href="<?php Helper::options()->siteUrl()?>" >
                <div class="Header_parent__3EA6A global-parent"><svg aria-hidden="true" focusable="false"
                        data-prefix="far" data-icon="dot-circle" class="svg-inline--fa fa-dot-circle fa-w-16 "
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M256 56c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m0-48C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 168c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80z">
                        </path>
                    </svg><span>源</span></div>
            </a>
            <div class="Header_children-wrapper__1z9Ni global-children-wrapper">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a href="<?php $pages->permalink(); ?>" >
                    <div class="Header_children__2ZydX global-children"><span><?php $pages->title(); ?></span></div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="Header_link-section__1JFc9 global-link-section"><a href="#" >
                <div class="Header_parent__3EA6A global-parent"><svg aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="glasses" class="svg-inline--fa fa-glasses fa-w-18 " role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M574.1 280.37L528.75 98.66c-5.91-23.7-21.59-44.05-43-55.81-21.44-11.73-46.97-14.11-70.19-6.33l-15.25 5.08c-8.39 2.79-12.92 11.86-10.12 20.24l5.06 15.18c2.79 8.38 11.85 12.91 20.23 10.12l13.18-4.39c10.87-3.62 23-3.57 33.16 1.73 10.29 5.37 17.57 14.56 20.37 25.82l38.46 153.82c-22.19-6.81-49.79-12.46-81.2-12.46-34.77 0-73.98 7.02-114.85 26.74h-73.18c-40.87-19.74-80.08-26.75-114.86-26.75-31.42 0-59.02 5.65-81.21 12.46l38.46-153.83c2.79-11.25 10.09-20.45 20.38-25.81 10.16-5.3 22.28-5.35 33.15-1.73l13.17 4.39c8.38 2.79 17.44-1.74 20.23-10.12l5.06-15.18c2.8-8.38-1.73-17.45-10.12-20.24l-15.25-5.08c-23.22-7.78-48.75-5.41-70.19 6.33-21.41 11.77-37.09 32.11-43 55.8L1.9 280.37A64.218 64.218 0 0 0 0 295.86v70.25C0 429.01 51.58 480 115.2 480h37.12c60.28 0 110.37-45.94 114.88-105.37l2.93-38.63h35.75l2.93 38.63C313.31 434.06 363.4 480 423.68 480h37.12c63.62 0 115.2-50.99 115.2-113.88v-70.25c0-5.23-.64-10.43-1.9-15.5zm-370.72 89.42c-1.97 25.91-24.4 46.21-51.06 46.21H115.2C86.97 416 64 393.62 64 366.11v-37.54c18.12-6.49 43.42-12.92 72.58-12.92 23.86 0 47.26 4.33 69.93 12.92l-3.13 41.22zM512 366.12c0 27.51-22.97 49.88-51.2 49.88h-37.12c-26.67 0-49.1-20.3-51.06-46.21l-3.13-41.22c22.67-8.59 46.08-12.92 69.95-12.92 29.12 0 54.43 6.44 72.55 12.93v37.54z">
                        </path>
                    </svg><span>文</span></div>
            </a>
            <div class="Header_children-wrapper__1z9Ni global-children-wrapper">
                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                <?php if($category->have()): ?>
                <?php while ($category->next()): ?>
                <a href="<?php $category->permalink(); ?>" >
                    <div class="Header_children__2ZydX global-children"><span><?php $category->name(); ?></span></div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="Header_link-section__1JFc9 global-link-section"><a href="<?php $this->options->FriendURL();?>" >
                <div class="Header_parent__3EA6A global-parent"><svg aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="user-friends" class="svg-inline--fa fa-user-friends fa-w-20 "
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="currentColor"
                            d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z">
                        </path>
                    </svg><span>友</span></div>
            </a>
            <div class="Header_children-wrapper__1z9Ni global-children-wrapper"></div>
        </div>
        <?php
        $hideHomeItem = false;
        if(!empty(Typecho_Widget::widget('Widget_Options')->headnavItems)){
            $json = '['.Utils::remove_last_comma(Typecho_Widget::widget('Widget_Options')->headnavItems).']';
            
            $headnavItems = json_decode($json);
            $headnavItemsOutput = "";
            foreach ($headnavItems as $headnavItem){

                @$itemName = $headnavItem->name;
                @$itemStatus = $headnavItem->status;

                @$itemSub = $headnavItem->sub;

                if ($itemName === 'home' && strtoupper($itemStatus) === 'HIDE'){
                    $hideHomeItem = true;
                    continue;//本次循环结束，不再执行下面内容
                }

                $haveSub = false;
                $subListHtml = "";
//                      print_r($itemSub);
                if (is_array($itemSub)){
                    $haveSub = true;
                    $subListHtml .= '<div class="Header_children-wrapper__1z9Ni global-children-wrapper">';
                    foreach ($itemSub as $subItem){
                        $subListHtml .= Content::returnHeadSideItem($subItem,false,"" ,'yes');
                    }
                    $subListHtml .= '</div>';
                    // echo '<script>console.log("'.$subListHtml.'")</script>';
                }
                // $headnavItemsOutput .= '<div class="Header_link-section__1JFc9 global-link-section">';
                $headnavItemsOutput .= Content::returnHeadSideItem($headnavItem,$haveSub,$subListHtml,'no');
                $headnavItemsOutput .= $subListHtml;
                // $headnavItemsOutput .= '<div>';
            }
        }
        ?>
        <?php echo @$headnavItemsOutput;?>
    </div>
    </div>
    </div>
    </div>