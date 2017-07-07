<style type="text/css">
	#wpadminbar {
		background-color: %s !important;
	}

	#wp-admin-bar-environment-notice {
		display: none;
	}

	#wpadminbar .ab-item,
	#wpadminbar a.ab-item,
	#wpadminbar > #wp-toolbar span.ab-label,
	#wpadminbar > #wp-toolbar span.noticon,
	.adminbar--environment-notice {
		color: #fff;
	}

	@media only screen and ( min-width: 800px ) {
		#wp-admin-bar-environment-notice {
			display: block;
		}

		#wp-admin-bar-environment-notice .ab-item {
			background-color: %s !important;
		}

		#wp-admin-bar-environment-notice:hover .ab-item {
			background-color: %s !important;
			color: #fff;
		}
	}
</style>