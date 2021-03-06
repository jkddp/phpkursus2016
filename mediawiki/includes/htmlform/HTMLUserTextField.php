<?php

use MediaWiki\Widget\UserInputWidget;

/**
 * Implements a text input field for user names.
 * Automatically auto-completes if using the OOUI display format.
 *
 * FIXME: Does not work for forms that support GET requests.
 *
 * Optional parameters:
 * 'exists' - Whether to validate that the user already exists
 *
 * @since 1.26
 */
class HTMLUserTextField extends HTMLTextField {
	public function __construct( $params ) {
		$params += array(
			'exists' => false,
			'ipallowed' => false,
		);

		parent::__construct( $params );
	}

	public function validate( $value, $alldata ) {
		// check, if a user exists with the given username
		$user = User::newFromName( $value, false );

		if ( !$user ) {
			return $this->msg( 'htmlform-user-not-valid', $value )->parse();
		} elseif (
			( $this->mParams['exists'] && $user->getId() === 0 ) &&
			!( $this->mParams['ipallowed'] && User::isIP( $value ) )
		) {
			return $this->msg( 'htmlform-user-not-exists', $user->getName() )->parse();
		}

		return parent::validate( $value, $alldata );
	}

	protected function getInputWidget( $params ) {
		$this->mParent->getOutput()->addModules( 'mediawiki.widgets.UserInputWidget' );

		return new UserInputWidget( $params );
	}
}
