/*! For license information please see backend.0lxhBtW1Z.js.LICENSE.txt */
!function(){const e=PRHelper.getType(),t=PRHelper.getHook(),n=PRHelper.getHTML();function o(e,o,a,i,l){const c=n.getValue(i);n.spinner(l),PRHelper.getRequest().ajax("get_related_terms").onSuccess((n=>{if("undefined"!=typeof jQuery){const o=jQuery(e);o.val(""),o.selectpicker("val",""),o.selectpicker("deselectAll"),o.find('option:not([value=""])').remove(),t.doAction("form_generator_select_add_options",o,n,!0,!1,!0),o.trigger("change")}})).onFinally((()=>{n.spinner(l,!1)})).send({taxonomy:a,related_to:c,related_to_tax:o})}t.on("DOMContentLoaded",(()=>{const a={material:"medium",category:"material",product_cat:"material"};for(let e in a){const i=a[e];t.addAction(`form_generator_tax_input_${i}_changed`,(function(){const t=n.getElement(`#tax_input_${e}`);n.isElement(t)&&o(t,i,e,`#tax_input_${i}`,n.getParent(t,".postbox"))}))}t.bubbling("change",(function(t){const a=n.getTarget(t),i=n.getParent(a,".pr-fieldset"),l={category:n.getElement("select.field-id-categories",i),product_cat:n.getElement("select.field-id-product_cats",i)};e.each(l,((e,t)=>{n.isElement(e)&&o(e,"material",t,a,i)}))}),"#activity_fields_collection select.field-id-material")}))}();