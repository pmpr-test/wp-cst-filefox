/*! For license information please see backend.YDSfsSUhp.js.LICENSE.txt */
!function(){const e=PRHelper.getHook(),t=PRHelper.getHTML();function n(n,o,a){const r=t.getValue(`#tax_input_${o}`),i=t.getParent(n,".postbox");t.spinner(i),PRHelper.getRequest().ajax("get_related_terms").onSuccess((t=>{const o=t.data;if("undefined"!=typeof jQuery){const t=jQuery(n);t.val(""),t.selectpicker("val",""),t.selectpicker("deselectAll"),t.find('option:not([value=""])').remove(),e.doAction("form_generator_select_add_options",t,o,!0,!1,!0),t.trigger("change")}})).onFinally((()=>{t.spinner(i,!1)})).send({taxonomy:a,related_to:r,related_to_tax:o})}e.on("DOMContentLoaded",(()=>{const e={material:"medium",product_cat:"material"};for(let o in e){const a=e[o];PMPRTrigger.addAction(`form_generator_tax_input_${a}_changed`,(function(){const e=t.getElement(`#tax_input_${o}`);t.isElement(e)&&n(e,a,o)}))}}))}();