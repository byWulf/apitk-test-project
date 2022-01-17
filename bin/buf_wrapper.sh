#!/bin/bash

# This wrapper script downloads the protoc compiler and the buf tool into a ./.proto subdirectory
# and finally exports a $PATH variable with the ./.proto directory included.
#
# Downloads are only done if the ./.proto directory does NOT exist.
# If you want to update any of the two versions, just delete the whole ./.proto directory and re-run
# the script.

set -o nounset
set -o errexit
set -o pipefail

PROTOC_VERSION="3.19.1"
BUF_VERSION="1.0.0-rc10"

TARGET_DIR="$(dirname "${BASH_SOURCE-$0}")/.proto"

function get_protoc_os_name() {
  case $(uname -s | tr '[:upper:]' '[:lower:]') in
    linux*)
      local os_name=linux
      ;;
    darwin*)
      local os_name=osx
      ;;
    msys*)
      local os_name=win
      ;;
    *)
      local os_name=unknown
      ;;
  esac
  echo "${os_name}-$(uname -m)"
}

function download_protoc {
  OS_NAME=$(get_protoc_os_name)
  PROTOC_ARCHIVE_NAME="protoc-${PROTOC_VERSION}-${OS_NAME}.zip"
  PROTOC_UNPACK_DIR=$TARGET_DIR/tmp_protoc
  curl -sSL \
    "https://github.com/protocolbuffers/protobuf/releases/download/v${PROTOC_VERSION}/${PROTOC_ARCHIVE_NAME}" \
    -o "${TARGET_DIR}/protoc-${PROTOC_VERSION}-${OS_NAME}.zip"
  mkdir -p $PROTOC_UNPACK_DIR
  unzip -qq $TARGET_DIR/$PROTOC_ARCHIVE_NAME -d $PROTOC_UNPACK_DIR
  mv $PROTOC_UNPACK_DIR/bin/protoc $TARGET_DIR
  chmod +x $TARGET_DIR/protoc
  rm -rf $PROTOC_UNPACK_DIR
  rm -f $TARGET_DIR/$PROTOC_ARCHIVE_NAME
}

function download_buf {
  curl -sSL \
		"https://github.com/bufbuild/buf/releases/download/v${BUF_VERSION}/buf-$(uname -s)-$(uname -m)" \
		-o "${TARGET_DIR}/buf"
	chmod +x "${TARGET_DIR}/buf"
}

function download_binaries {
  if [[ ! -d $TARGET_DIR ]]; then
    mkdir -p $TARGET_DIR
    download_protoc
    download_buf
  fi
}

function main {
  download_binaries
  if [ -x "$(command -v realpath)" ]; then
    export PATH=$PATH:$(realpath $TARGET_DIR)
  else
    export PATH=$PATH:$TARGET_DIR
  fi
}

main