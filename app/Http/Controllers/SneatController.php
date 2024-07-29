<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SneatController extends Controller
{
    public function dashboard(){
		$data['active_menu'] = "dashboard";
		return view('dashboard', $data);
	}

    public function account(){
		$data['active_menu'] = "account";
		return view('account-setting.account', $data);
	}

	public function notification(){
		$data['active_menu'] = "notification";
		return view('account-setting.notification', $data);
	}

	public function connection(){
		$data['active_menu'] = "connection";
		return view('account-setting.connection', $data);
	}

    public function login(){
		$data['active_menu'] = "login";
		return view('login.login', $data);
	}

	public function register(){
		$data['active_menu'] = "register";
		return view('login.register', $data);
	}

	public function forgot(){
		$data['active_menu'] = "forgot";
		return view('login.forgot', $data);
	}

    public function error(){
		$data['active_menu'] = "error";
		return view('misc.error', $data);
	}

	public function maintenance(){
		$data['active_menu'] = "maintenance";
		return view('misc.maintenance', $data);
	}

	public function card(){
		$data['active_menu'] = "card";
		return view('card', $data);
	}

	public function accordion(){
		$data['active_menu'] = "accordion";
		return view('user-interface.accordion', $data);
	}

	public function alert(){
		$data['active_menu'] = "alert";
        return view('user-interface.alert', $data);
	}

	public function badge(){
		$data['active_menu'] = "badge";
		return view('user-interface.badge', $data);
	}

	public function button(){
		$data['active_menu'] = "button";
		return view('user-interface.button', $data);
	}

	public function carousel(){
		$data['active_menu'] = "carousel";
		return view('user-interface.carousel', $data);
	}

	public function collapse(){
		$data['active_menu'] = "collapse";
		return view('user-interface.collapse', $data);
	}

	public function dropdown(){
		$data['active_menu'] = "dropdown";
		return view('user-interface.dropdown', $data);
	}

	public function footer(){
		$data['active_menu'] = "footer";
		return view('user-interface.footer', $data);
	}

	public function listgroup(){
		$data['active_menu'] = "listgroup";
		return view('user-interface.listgroup', $data);
	}

	public function modal(){
		$data['active_menu'] = "modal";
		return view('user-interface.modal', $data);
	}

	public function navbar(){
		$data['active_menu'] = "navbar";
		return view('user-interface.navbar', $data);
	}

	public function offcanvas(){
		$data['active_menu'] = "offcanvas";
		return view('user-interface.offcanvas', $data);
	}

	public function pagination_breadcrumb(){
		$data['active_menu'] = "pagination_breadcrumb";
		return view('user-interface.pagination_breadcrumb', $data);
	}

	public function progress(){
		$data['active_menu'] = "progress";
		return view('user-interface.progress', $data);
	}

	public function spinner(){
		$data['active_menu'] = "spinner";
		return view('user-interface.spinner', $data);
	}

	public function tab_pill(){
		$data['active_menu'] = "tab_pill";
		return view('user-interface.tab_pill', $data);
	}

	public function toast(){
		$data['active_menu'] = "toast";
		return view('user-interface.toast', $data);
	}

	public function tooltip_popover(){
		$data['active_menu'] = "tooltip_popover";
		return view('user-interface.tooltip_popover', $data);
	}

	public function typhography(){
		$data['active_menu'] = "typhography";
		return view('user-interface.typhography', $data);
	}

	public function perfect_scrollbar(){
		$data['active_menu'] = "perfect_scrollbar";
		return view('extended-ui.perfect_scrollbar', $data);
	}

	public function text_divider(){
		$data['active_menu'] = "text_divider";
		return view('extended-ui.text_divider', $data);
	}

	public function boxicon(){
		$data['active_menu'] = "boxicon";
		return view('boxicon', $data);
	}

	public function basic_input(){
		$data['active_menu'] = "basic_input";
		return view('form.basic_input', $data);
	}

	public function inputgroup(){
		$data['active_menu'] = "inputgroup";
		return view('form.inputgroup', $data);
	}

	public function vertical_form(){
		$data['active_menu'] = "vertical_form";
		return view('form.vertical', $data);
	}

	public function horizontal_form(){
		$data['active_menu'] = "horizontal_form";
		return view('form.horizontal', $data);
	}

	public function table(){
		$data['active_menu'] = "table";
		return view('table', $data);
	}
}
